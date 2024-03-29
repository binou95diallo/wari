<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Tests\Extension\DataCollector;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Form\Extension\DataCollector\FormDataCollector;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormView;

class FormDataCollectorTest extends TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $dataExtractor;

    /**
     * @var FormDataCollector
     */
    private $dataCollector;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $dispatcher;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $factory;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $dataMapper;

    /**
     * @var Form
     */
    private $form;

    /**
     * @var Form
     */
    private $childForm;

    /**
     * @var FormView
     */
    private $view;

    /**
     * @var FormView
     */
    private $childView;

    protected function setUp()
    {
        $this->dataExtractor = $this->getMockBuilder('Symfony\Component\Form\Extension\DataCollector\FormDataExtractorInterface')->getMock();
        $this->dataCollector = new FormDataCollector($this->dataExtractor);
        $this->dispatcher = $this->getMockBuilder('Symfony\Component\EventDispatcher\EventDispatcherInterface')->getMock();
        $this->factory = $this->getMockBuilder('Symfony\Component\Form\FormFactoryInterface')->getMock();
        $this->dataMapper = $this->getMockBuilder('Symfony\Component\Form\DataMapperInterface')->getMock();
        $this->form = $this->createForm('name');
        $this->childForm = $this->createForm('child');
        $this->view = new FormView();
        $this->childView = new FormView();
    }

    public function testBuildPreliminaryFormTree()
    {
        $this->form->add($this->childForm);

        $this->dataExtractor->expects($this->at(0))
            ->method('extractConfiguration')
            ->with($this->form)
            ->willReturn(['config' => 'foo']);
        $this->dataExtractor->expects($this->at(1))
            ->method('extractConfiguration')
            ->with($this->childForm)
            ->willReturn(['config' => 'bar']);

        $this->dataExtractor->expects($this->at(2))
            ->method('extractDefaultData')
            ->with($this->form)
            ->willReturn(['default_data' => 'foo']);
        $this->dataExtractor->expects($this->at(3))
            ->method('extractDefaultData')
            ->with($this->childForm)
            ->willReturn(['default_data' => 'bar']);

        $this->dataExtractor->expects($this->at(4))
            ->method('extractSubmittedData')
            ->with($this->form)
            ->willReturn(['submitted_data' => 'foo']);
        $this->dataExtractor->expects($this->at(5))
            ->method('extractSubmittedData')
            ->with($this->childForm)
            ->willReturn(['submitted_data' => 'bar']);

        $this->dataCollector->collectConfiguration($this->form);
        $this->dataCollector->collectDefaultData($this->form);
        $this->dataCollector->collectSubmittedData($this->form);
        $this->dataCollector->buildPreliminaryFormTree($this->form);

        $childFormData = [
             'config' => 'bar',
             'default_data' => 'bar',
             'submitted_data' => 'bar',
             'children' => [],
         ];

        $formData = [
             'config' => 'foo',
             'default_data' => 'foo',
             'submitted_data' => 'foo',
             'has_children_error' => false,
             'children' => [
                 'child' => $childFormData,
             ],
         ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
                spl_object_hash($this->childForm) => $childFormData,
            ],
            'nb_errors' => 0,
         ], $this->dataCollector->getData());
    }

    public function testBuildMultiplePreliminaryFormTrees()
    {
        $form1 = $this->createForm('form1');
        $form2 = $this->createForm('form2');

        $this->dataExtractor->expects($this->at(0))
            ->method('extractConfiguration')
            ->with($form1)
            ->willReturn(['config' => 'foo']);
        $this->dataExtractor->expects($this->at(1))
            ->method('extractConfiguration')
            ->with($form2)
            ->willReturn(['config' => 'bar']);

        $this->dataCollector->collectConfiguration($form1);
        $this->dataCollector->collectConfiguration($form2);
        $this->dataCollector->buildPreliminaryFormTree($form1);

        $form1Data = [
            'config' => 'foo',
            'children' => [],
        ];

        $this->assertSame([
            'forms' => [
                'form1' => $form1Data,
            ],
            'forms_by_hash' => [
                spl_object_hash($form1) => $form1Data,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());

        $this->dataCollector->buildPreliminaryFormTree($form2);

        $form2Data = [
            'config' => 'bar',
            'children' => [],
        ];

        $this->assertSame([
            'forms' => [
                'form1' => $form1Data,
                'form2' => $form2Data,
            ],
            'forms_by_hash' => [
                spl_object_hash($form1) => $form1Data,
                spl_object_hash($form2) => $form2Data,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());
    }

    public function testBuildSamePreliminaryFormTreeMultipleTimes()
    {
        $this->dataExtractor->expects($this->at(0))
            ->method('extractConfiguration')
            ->with($this->form)
            ->willReturn(['config' => 'foo']);

        $this->dataExtractor->expects($this->at(1))
            ->method('extractDefaultData')
            ->with($this->form)
            ->willReturn(['default_data' => 'foo']);

        $this->dataCollector->collectConfiguration($this->form);
        $this->dataCollector->buildPreliminaryFormTree($this->form);

        $formData = [
            'config' => 'foo',
            'children' => [],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());

        $this->dataCollector->collectDefaultData($this->form);
        $this->dataCollector->buildPreliminaryFormTree($this->form);

        $formData = [
            'config' => 'foo',
            'default_data' => 'foo',
            'children' => [],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());
    }

    public function testBuildPreliminaryFormTreeWithoutCollectingAnyData()
    {
        $this->dataCollector->buildPreliminaryFormTree($this->form);

        $formData = [
            'children' => [],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());
    }

    public function testBuildFinalFormTree()
    {
        $this->form->add($this->childForm);
        $this->view->children['child'] = $this->childView;

        $this->dataExtractor->expects($this->at(0))
            ->method('extractConfiguration')
            ->with($this->form)
            ->willReturn(['config' => 'foo']);
        $this->dataExtractor->expects($this->at(1))
            ->method('extractConfiguration')
            ->with($this->childForm)
            ->willReturn(['config' => 'bar']);

        $this->dataExtractor->expects($this->at(2))
            ->method('extractDefaultData')
            ->with($this->form)
            ->willReturn(['default_data' => 'foo']);
        $this->dataExtractor->expects($this->at(3))
            ->method('extractDefaultData')
            ->with($this->childForm)
            ->willReturn(['default_data' => 'bar']);

        $this->dataExtractor->expects($this->at(4))
            ->method('extractSubmittedData')
            ->with($this->form)
            ->willReturn(['submitted_data' => 'foo']);
        $this->dataExtractor->expects($this->at(5))
            ->method('extractSubmittedData')
            ->with($this->childForm)
            ->willReturn(['submitted_data' => 'bar']);

        $this->dataExtractor->expects($this->at(6))
            ->method('extractViewVariables')
            ->with($this->view)
            ->willReturn(['view_vars' => 'foo']);

        $this->dataExtractor->expects($this->at(7))
            ->method('extractViewVariables')
            ->with($this->childView)
            ->willReturn(['view_vars' => 'bar']);

        $this->dataCollector->collectConfiguration($this->form);
        $this->dataCollector->collectDefaultData($this->form);
        $this->dataCollector->collectSubmittedData($this->form);
        $this->dataCollector->collectViewVariables($this->view);
        $this->dataCollector->buildFinalFormTree($this->form, $this->view);

        $childFormData = [
            'view_vars' => 'bar',
            'config' => 'bar',
            'default_data' => 'bar',
            'submitted_data' => 'bar',
            'children' => [],
        ];

        $formData = [
            'view_vars' => 'foo',
            'config' => 'foo',
            'default_data' => 'foo',
            'submitted_data' => 'foo',
            'has_children_error' => false,
            'children' => [
                'child' => $childFormData,
            ],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
                spl_object_hash($this->childForm) => $childFormData,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());
    }

    public function testSerializeWithFormAddedMultipleTimes()
    {
        $form1 = $this->createForm('form1');
        $form2 = $this->createForm('form2');
        $child1 = $this->createForm('child1');

        $form1View = new FormView();
        $form2View = new FormView();
        $child1View = new FormView();
        $child1View->vars['is_selected'] = function ($choice, array $values) {
            return \in_array($choice, $values, true);
        };

        $form1->add($child1);
        $form2->add($child1);

        $form1View->children['child1'] = $child1View;
        $form2View->children['child1'] = $child1View;

        $this->dataExtractor->expects($this->at(0))
            ->method('extractConfiguration')
            ->with($form1)
            ->willReturn(['config' => 'foo']);
        $this->dataExtractor->expects($this->at(1))
            ->method('extractConfiguration')
            ->with($child1)
            ->willReturn(['config' => 'bar']);

        $this->dataExtractor->expects($this->at(2))
            ->method('extractDefaultData')
            ->with($form1)
            ->willReturn(['default_data' => 'foo']);
        $this->dataExtractor->expects($this->at(3))
            ->method('extractDefaultData')
            ->with($child1)
            ->willReturn(['default_data' => 'bar']);

        $this->dataExtractor->expects($this->at(4))
            ->method('extractSubmittedData')
            ->with($form1)
            ->willReturn(['submitted_data' => 'foo']);
        $this->dataExtractor->expects($this->at(5))
            ->method('extractSubmittedData')
            ->with($child1)
            ->willReturn(['submitted_data' => 'bar']);

        $this->dataExtractor->expects($this->at(6))
            ->method('extractViewVariables')
            ->with($form1View)
            ->willReturn(['view_vars' => 'foo']);

        $this->dataExtractor->expects($this->at(7))
            ->method('extractViewVariables')
            ->with($child1View)
            ->willReturn(['view_vars' => $child1View->vars]);

        $this->dataExtractor->expects($this->at(8))
            ->method('extractConfiguration')
            ->with($form2)
            ->willReturn(['config' => 'foo']);
        $this->dataExtractor->expects($this->at(9))
            ->method('extractConfiguration')
            ->with($child1)
            ->willReturn(['config' => 'bar']);

        $this->dataExtractor->expects($this->at(10))
            ->method('extractDefaultData')
            ->with($form2)
            ->willReturn(['default_data' => 'foo']);
        $this->dataExtractor->expects($this->at(11))
            ->method('extractDefaultData')
            ->with($child1)
            ->willReturn(['default_data' => 'bar']);

        $this->dataExtractor->expects($this->at(12))
            ->method('extractSubmittedData')
            ->with($form2)
            ->willReturn(['submitted_data' => 'foo']);
        $this->dataExtractor->expects($this->at(13))
            ->method('extractSubmittedData')
            ->with($child1)
            ->willReturn(['submitted_data' => 'bar']);

        $this->dataExtractor->expects($this->at(14))
            ->method('extractViewVariables')
            ->with($form2View)
            ->willReturn(['view_vars' => 'foo']);

        $this->dataExtractor->expects($this->at(15))
            ->method('extractViewVariables')
            ->with($child1View)
            ->willReturn(['view_vars' => $child1View->vars]);

        $this->dataCollector->collectConfiguration($form1);
        $this->dataCollector->collectDefaultData($form1);
        $this->dataCollector->collectSubmittedData($form1);
        $this->dataCollector->collectViewVariables($form1View);
        $this->dataCollector->buildFinalFormTree($form1, $form1View);

        $this->dataCollector->collectConfiguration($form2);
        $this->dataCollector->collectDefaultData($form2);
        $this->dataCollector->collectSubmittedData($form2);
        $this->dataCollector->collectViewVariables($form2View);
        $this->dataCollector->buildFinalFormTree($form2, $form2View);

        serialize($this->dataCollector);
    }

    public function testFinalFormReliesOnFormViewStructure()
    {
        $this->form->add($child1 = $this->createForm('first'));
        $this->form->add($child2 = $this->createForm('second'));

        $this->view->children['second'] = $this->childView;

        $this->dataCollector->buildPreliminaryFormTree($this->form);

        $child1Data = [
            'children' => [],
        ];

        $child2Data = [
            'children' => [],
        ];

        $formData = [
            'children' => [
                'first' => $child1Data,
                'second' => $child2Data,
            ],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
                spl_object_hash($child1) => $child1Data,
                spl_object_hash($child2) => $child2Data,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());

        $this->dataCollector->buildFinalFormTree($this->form, $this->view);

        $formData = [
            'children' => [
                // "first" not present in FormView
                'second' => $child2Data,
            ],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
                spl_object_hash($child1) => $child1Data,
                spl_object_hash($child2) => $child2Data,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());
    }

    public function testChildViewsCanBeWithoutCorrespondingChildForms()
    {
        // don't add $this->childForm to $this->form!

        $this->view->children['child'] = $this->childView;

        $this->dataExtractor->expects($this->at(0))
            ->method('extractConfiguration')
            ->with($this->form)
            ->willReturn(['config' => 'foo']);
        $this->dataExtractor->expects($this->at(1))
            ->method('extractConfiguration')
            ->with($this->childForm)
            ->willReturn(['config' => 'bar']);

        // explicitly call collectConfiguration(), since $this->childForm is not
        // contained in the form tree
        $this->dataCollector->collectConfiguration($this->form);
        $this->dataCollector->collectConfiguration($this->childForm);
        $this->dataCollector->buildFinalFormTree($this->form, $this->view);

        $childFormData = [
            // no "config" key
            'children' => [],
        ];

        $formData = [
            'config' => 'foo',
            'children' => [
                'child' => $childFormData,
            ],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
                // no child entry
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());
    }

    public function testChildViewsWithoutCorrespondingChildFormsMayBeExplicitlyAssociated()
    {
        // don't add $this->childForm to $this->form!

        $this->view->children['child'] = $this->childView;

        // but associate the two
        $this->dataCollector->associateFormWithView($this->childForm, $this->childView);

        $this->dataExtractor->expects($this->at(0))
            ->method('extractConfiguration')
            ->with($this->form)
            ->willReturn(['config' => 'foo']);
        $this->dataExtractor->expects($this->at(1))
            ->method('extractConfiguration')
            ->with($this->childForm)
            ->willReturn(['config' => 'bar']);

        // explicitly call collectConfiguration(), since $this->childForm is not
        // contained in the form tree
        $this->dataCollector->collectConfiguration($this->form);
        $this->dataCollector->collectConfiguration($this->childForm);
        $this->dataCollector->buildFinalFormTree($this->form, $this->view);

        $childFormData = [
            'config' => 'bar',
            'children' => [],
        ];

        $formData = [
            'config' => 'foo',
            'children' => [
                'child' => $childFormData,
            ],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
                spl_object_hash($this->childForm) => $childFormData,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());
    }

    public function testCollectSubmittedDataCountsErrors()
    {
        $form1 = $this->createForm('form1');
        $childForm1 = $this->createForm('child1');
        $form2 = $this->createForm('form2');

        $form1->add($childForm1);
        $this->dataExtractor
             ->method('extractConfiguration')
             ->willReturn([]);
        $this->dataExtractor
             ->method('extractDefaultData')
             ->willReturn([]);
        $this->dataExtractor->expects($this->at(4))
            ->method('extractSubmittedData')
            ->with($form1)
            ->willReturn(['errors' => ['foo']]);
        $this->dataExtractor->expects($this->at(5))
            ->method('extractSubmittedData')
            ->with($childForm1)
            ->willReturn(['errors' => ['bar', 'bam']]);
        $this->dataExtractor->expects($this->at(8))
            ->method('extractSubmittedData')
            ->with($form2)
            ->willReturn(['errors' => ['baz']]);

        $this->dataCollector->collectSubmittedData($form1);

        $data = $this->dataCollector->getData();
        $this->assertSame(3, $data['nb_errors']);

        $this->dataCollector->collectSubmittedData($form2);

        $data = $this->dataCollector->getData();
        $this->assertSame(4, $data['nb_errors']);
    }

    public function testCollectSubmittedDataExpandedFormsErrors()
    {
        $child1Form = $this->createForm('child1');
        $child11Form = $this->createForm('child11');
        $child2Form = $this->createForm('child2');
        $child21Form = $this->createForm('child21');

        $child1Form->add($child11Form);
        $child2Form->add($child21Form);
        $this->form->add($child1Form);
        $this->form->add($child2Form);

        $this->dataExtractor
            ->method('extractConfiguration')
            ->willReturn([]);
        $this->dataExtractor
            ->method('extractDefaultData')
            ->willReturn([]);
        $this->dataExtractor->expects($this->at(10))
            ->method('extractSubmittedData')
            ->with($this->form)
            ->willReturn(['errors' => []]);
        $this->dataExtractor->expects($this->at(11))
            ->method('extractSubmittedData')
            ->with($child1Form)
            ->willReturn(['errors' => []]);
        $this->dataExtractor->expects($this->at(12))
            ->method('extractSubmittedData')
            ->with($child11Form)
            ->willReturn(['errors' => ['foo']]);
        $this->dataExtractor->expects($this->at(13))
            ->method('extractSubmittedData')
            ->with($child2Form)
            ->willReturn(['errors' => []]);
        $this->dataExtractor->expects($this->at(14))
            ->method('extractSubmittedData')
            ->with($child21Form)
            ->willReturn(['errors' => []]);

        $this->dataCollector->collectSubmittedData($this->form);
        $this->dataCollector->buildPreliminaryFormTree($this->form);

        $data = $this->dataCollector->getData();
        $formData = $data['forms']['name'];
        $child1Data = $formData['children']['child1'];
        $child11Data = $child1Data['children']['child11'];
        $child2Data = $formData['children']['child2'];
        $child21Data = $child2Data['children']['child21'];

        $this->assertTrue($formData['has_children_error']);
        $this->assertTrue($child1Data['has_children_error']);
        $this->assertArrayNotHasKey('has_children_error', $child11Data, 'The leaf data does not contains "has_children_error" property.');
        $this->assertFalse($child2Data['has_children_error']);
        $this->assertArrayNotHasKey('has_children_error', $child21Data, 'The leaf data does not contains "has_children_error" property.');
    }

    public function testReset()
    {
        $form = $this->createForm('my_form');

        $this->dataExtractor->expects($this->any())
            ->method('extractConfiguration')
            ->willReturn([]);
        $this->dataExtractor->expects($this->any())
            ->method('extractDefaultData')
            ->willReturn([]);
        $this->dataExtractor->expects($this->any())
            ->method('extractSubmittedData')
            ->with($form)
            ->willReturn(['errors' => ['baz']]);

        $this->dataCollector->buildPreliminaryFormTree($form);
        $this->dataCollector->collectSubmittedData($form);

        $this->dataCollector->reset();

        $this->assertSame(
            [
                'forms' => [],
                'forms_by_hash' => [],
                'nb_errors' => 0,
            ],
            $this->dataCollector->getData()
        );
    }

    private function createForm($name)
    {
        $builder = new FormBuilder($name, null, $this->dispatcher, $this->factory);
        $builder->setCompound(true);
        $builder->setDataMapper($this->dataMapper);

        return $builder->getForm();
    }
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Tests\Extension\DataCollector;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Form\Extension\DataCollector\FormDataCollector;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormView;

class FormDataCollectorTest extends TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $dataExtractor;

    /**
     * @var FormDataCollector
     */
    private $dataCollector;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $dispatcher;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $factory;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $dataMapper;

    /**
     * @var Form
     */
    private $form;

    /**
     * @var Form
     */
    private $childForm;

    /**
     * @var FormView
     */
    private $view;

    /**
     * @var FormView
     */
    private $childView;

    protected function setUp()
    {
        $this->dataExtractor = $this->getMockBuilder('Symfony\Component\Form\Extension\DataCollector\FormDataExtractorInterface')->getMock();
        $this->dataCollector = new FormDataCollector($this->dataExtractor);
        $this->dispatcher = $this->getMockBuilder('Symfony\Component\EventDispatcher\EventDispatcherInterface')->getMock();
        $this->factory = $this->getMockBuilder('Symfony\Component\Form\FormFactoryInterface')->getMock();
        $this->dataMapper = $this->getMockBuilder('Symfony\Component\Form\DataMapperInterface')->getMock();
        $this->form = $this->createForm('name');
        $this->childForm = $this->createForm('child');
        $this->view = new FormView();
        $this->childView = new FormView();
    }

    public function testBuildPreliminaryFormTree()
    {
        $this->form->add($this->childForm);

        $this->dataExtractor->expects($this->at(0))
            ->method('extractConfiguration')
            ->with($this->form)
            ->willReturn(['config' => 'foo']);
        $this->dataExtractor->expects($this->at(1))
            ->method('extractConfiguration')
            ->with($this->childForm)
            ->willReturn(['config' => 'bar']);

        $this->dataExtractor->expects($this->at(2))
            ->method('extractDefaultData')
            ->with($this->form)
            ->willReturn(['default_data' => 'foo']);
        $this->dataExtractor->expects($this->at(3))
            ->method('extractDefaultData')
            ->with($this->childForm)
            ->willReturn(['default_data' => 'bar']);

        $this->dataExtractor->expects($this->at(4))
            ->method('extractSubmittedData')
            ->with($this->form)
            ->willReturn(['submitted_data' => 'foo']);
        $this->dataExtractor->expects($this->at(5))
            ->method('extractSubmittedData')
            ->with($this->childForm)
            ->willReturn(['submitted_data' => 'bar']);

        $this->dataCollector->collectConfiguration($this->form);
        $this->dataCollector->collectDefaultData($this->form);
        $this->dataCollector->collectSubmittedData($this->form);
        $this->dataCollector->buildPreliminaryFormTree($this->form);

        $childFormData = [
             'config' => 'bar',
             'default_data' => 'bar',
             'submitted_data' => 'bar',
             'children' => [],
         ];

        $formData = [
             'config' => 'foo',
             'default_data' => 'foo',
             'submitted_data' => 'foo',
             'has_children_error' => false,
             'children' => [
                 'child' => $childFormData,
             ],
         ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
                spl_object_hash($this->childForm) => $childFormData,
            ],
            'nb_errors' => 0,
         ], $this->dataCollector->getData());
    }

    public function testBuildMultiplePreliminaryFormTrees()
    {
        $form1 = $this->createForm('form1');
        $form2 = $this->createForm('form2');

        $this->dataExtractor->expects($this->at(0))
            ->method('extractConfiguration')
            ->with($form1)
            ->willReturn(['config' => 'foo']);
        $this->dataExtractor->expects($this->at(1))
            ->method('extractConfiguration')
            ->with($form2)
            ->willReturn(['config' => 'bar']);

        $this->dataCollector->collectConfiguration($form1);
        $this->dataCollector->collectConfiguration($form2);
        $this->dataCollector->buildPreliminaryFormTree($form1);

        $form1Data = [
            'config' => 'foo',
            'children' => [],
        ];

        $this->assertSame([
            'forms' => [
                'form1' => $form1Data,
            ],
            'forms_by_hash' => [
                spl_object_hash($form1) => $form1Data,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());

        $this->dataCollector->buildPreliminaryFormTree($form2);

        $form2Data = [
            'config' => 'bar',
            'children' => [],
        ];

        $this->assertSame([
            'forms' => [
                'form1' => $form1Data,
                'form2' => $form2Data,
            ],
            'forms_by_hash' => [
                spl_object_hash($form1) => $form1Data,
                spl_object_hash($form2) => $form2Data,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());
    }

    public function testBuildSamePreliminaryFormTreeMultipleTimes()
    {
        $this->dataExtractor->expects($this->at(0))
            ->method('extractConfiguration')
            ->with($this->form)
            ->willReturn(['config' => 'foo']);

        $this->dataExtractor->expects($this->at(1))
            ->method('extractDefaultData')
            ->with($this->form)
            ->willReturn(['default_data' => 'foo']);

        $this->dataCollector->collectConfiguration($this->form);
        $this->dataCollector->buildPreliminaryFormTree($this->form);

        $formData = [
            'config' => 'foo',
            'children' => [],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());

        $this->dataCollector->collectDefaultData($this->form);
        $this->dataCollector->buildPreliminaryFormTree($this->form);

        $formData = [
            'config' => 'foo',
            'default_data' => 'foo',
            'children' => [],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());
    }

    public function testBuildPreliminaryFormTreeWithoutCollectingAnyData()
    {
        $this->dataCollector->buildPreliminaryFormTree($this->form);

        $formData = [
            'children' => [],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());
    }

    public function testBuildFinalFormTree()
    {
        $this->form->add($this->childForm);
        $this->view->children['child'] = $this->childView;

        $this->dataExtractor->expects($this->at(0))
            ->method('extractConfiguration')
            ->with($this->form)
            ->willReturn(['config' => 'foo']);
        $this->dataExtractor->expects($this->at(1))
            ->method('extractConfiguration')
            ->with($this->childForm)
            ->willReturn(['config' => 'bar']);

        $this->dataExtractor->expects($this->at(2))
            ->method('extractDefaultData')
            ->with($this->form)
            ->willReturn(['default_data' => 'foo']);
        $this->dataExtractor->expects($this->at(3))
            ->method('extractDefaultData')
            ->with($this->childForm)
            ->willReturn(['default_data' => 'bar']);

        $this->dataExtractor->expects($this->at(4))
            ->method('extractSubmittedData')
            ->with($this->form)
            ->willReturn(['submitted_data' => 'foo']);
        $this->dataExtractor->expects($this->at(5))
            ->method('extractSubmittedData')
            ->with($this->childForm)
            ->willReturn(['submitted_data' => 'bar']);

        $this->dataExtractor->expects($this->at(6))
            ->method('extractViewVariables')
            ->with($this->view)
            ->willReturn(['view_vars' => 'foo']);

        $this->dataExtractor->expects($this->at(7))
            ->method('extractViewVariables')
            ->with($this->childView)
            ->willReturn(['view_vars' => 'bar']);

        $this->dataCollector->collectConfiguration($this->form);
        $this->dataCollector->collectDefaultData($this->form);
        $this->dataCollector->collectSubmittedData($this->form);
        $this->dataCollector->collectViewVariables($this->view);
        $this->dataCollector->buildFinalFormTree($this->form, $this->view);

        $childFormData = [
            'view_vars' => 'bar',
            'config' => 'bar',
            'default_data' => 'bar',
            'submitted_data' => 'bar',
            'children' => [],
        ];

        $formData = [
            'view_vars' => 'foo',
            'config' => 'foo',
            'default_data' => 'foo',
            'submitted_data' => 'foo',
            'has_children_error' => false,
            'children' => [
                'child' => $childFormData,
            ],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
                spl_object_hash($this->childForm) => $childFormData,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());
    }

    public function testSerializeWithFormAddedMultipleTimes()
    {
        $form1 = $this->createForm('form1');
        $form2 = $this->createForm('form2');
        $child1 = $this->createForm('child1');

        $form1View = new FormView();
        $form2View = new FormView();
        $child1View = new FormView();
        $child1View->vars['is_selected'] = function ($choice, array $values) {
            return \in_array($choice, $values, true);
        };

        $form1->add($child1);
        $form2->add($child1);

        $form1View->children['child1'] = $child1View;
        $form2View->children['child1'] = $child1View;

        $this->dataExtractor->expects($this->at(0))
            ->method('extractConfiguration')
            ->with($form1)
            ->willReturn(['config' => 'foo']);
        $this->dataExtractor->expects($this->at(1))
            ->method('extractConfiguration')
            ->with($child1)
            ->willReturn(['config' => 'bar']);

        $this->dataExtractor->expects($this->at(2))
            ->method('extractDefaultData')
            ->with($form1)
            ->willReturn(['default_data' => 'foo']);
        $this->dataExtractor->expects($this->at(3))
            ->method('extractDefaultData')
            ->with($child1)
            ->willReturn(['default_data' => 'bar']);

        $this->dataExtractor->expects($this->at(4))
            ->method('extractSubmittedData')
            ->with($form1)
            ->willReturn(['submitted_data' => 'foo']);
        $this->dataExtractor->expects($this->at(5))
            ->method('extractSubmittedData')
            ->with($child1)
            ->willReturn(['submitted_data' => 'bar']);

        $this->dataExtractor->expects($this->at(6))
            ->method('extractViewVariables')
            ->with($form1View)
            ->willReturn(['view_vars' => 'foo']);

        $this->dataExtractor->expects($this->at(7))
            ->method('extractViewVariables')
            ->with($child1View)
            ->willReturn(['view_vars' => $child1View->vars]);

        $this->dataExtractor->expects($this->at(8))
            ->method('extractConfiguration')
            ->with($form2)
            ->willReturn(['config' => 'foo']);
        $this->dataExtractor->expects($this->at(9))
            ->method('extractConfiguration')
            ->with($child1)
            ->willReturn(['config' => 'bar']);

        $this->dataExtractor->expects($this->at(10))
            ->method('extractDefaultData')
            ->with($form2)
            ->willReturn(['default_data' => 'foo']);
        $this->dataExtractor->expects($this->at(11))
            ->method('extractDefaultData')
            ->with($child1)
            ->willReturn(['default_data' => 'bar']);

        $this->dataExtractor->expects($this->at(12))
            ->method('extractSubmittedData')
            ->with($form2)
            ->willReturn(['submitted_data' => 'foo']);
        $this->dataExtractor->expects($this->at(13))
            ->method('extractSubmittedData')
            ->with($child1)
            ->willReturn(['submitted_data' => 'bar']);

        $this->dataExtractor->expects($this->at(14))
            ->method('extractViewVariables')
            ->with($form2View)
            ->willReturn(['view_vars' => 'foo']);

        $this->dataExtractor->expects($this->at(15))
            ->method('extractViewVariables')
            ->with($child1View)
            ->willReturn(['view_vars' => $child1View->vars]);

        $this->dataCollector->collectConfiguration($form1);
        $this->dataCollector->collectDefaultData($form1);
        $this->dataCollector->collectSubmittedData($form1);
        $this->dataCollector->collectViewVariables($form1View);
        $this->dataCollector->buildFinalFormTree($form1, $form1View);

        $this->dataCollector->collectConfiguration($form2);
        $this->dataCollector->collectDefaultData($form2);
        $this->dataCollector->collectSubmittedData($form2);
        $this->dataCollector->collectViewVariables($form2View);
        $this->dataCollector->buildFinalFormTree($form2, $form2View);

        serialize($this->dataCollector);
    }

    public function testFinalFormReliesOnFormViewStructure()
    {
        $this->form->add($child1 = $this->createForm('first'));
        $this->form->add($child2 = $this->createForm('second'));

        $this->view->children['second'] = $this->childView;

        $this->dataCollector->buildPreliminaryFormTree($this->form);

        $child1Data = [
            'children' => [],
        ];

        $child2Data = [
            'children' => [],
        ];

        $formData = [
            'children' => [
                'first' => $child1Data,
                'second' => $child2Data,
            ],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
                spl_object_hash($child1) => $child1Data,
                spl_object_hash($child2) => $child2Data,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());

        $this->dataCollector->buildFinalFormTree($this->form, $this->view);

        $formData = [
            'children' => [
                // "first" not present in FormView
                'second' => $child2Data,
            ],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
                spl_object_hash($child1) => $child1Data,
                spl_object_hash($child2) => $child2Data,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());
    }

    public function testChildViewsCanBeWithoutCorrespondingChildForms()
    {
        // don't add $this->childForm to $this->form!

        $this->view->children['child'] = $this->childView;

        $this->dataExtractor->expects($this->at(0))
            ->method('extractConfiguration')
            ->with($this->form)
            ->willReturn(['config' => 'foo']);
        $this->dataExtractor->expects($this->at(1))
            ->method('extractConfiguration')
            ->with($this->childForm)
            ->willReturn(['config' => 'bar']);

        // explicitly call collectConfiguration(), since $this->childForm is not
        // contained in the form tree
        $this->dataCollector->collectConfiguration($this->form);
        $this->dataCollector->collectConfiguration($this->childForm);
        $this->dataCollector->buildFinalFormTree($this->form, $this->view);

        $childFormData = [
            // no "config" key
            'children' => [],
        ];

        $formData = [
            'config' => 'foo',
            'children' => [
                'child' => $childFormData,
            ],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
                // no child entry
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());
    }

    public function testChildViewsWithoutCorrespondingChildFormsMayBeExplicitlyAssociated()
    {
        // don't add $this->childForm to $this->form!

        $this->view->children['child'] = $this->childView;

        // but associate the two
        $this->dataCollector->associateFormWithView($this->childForm, $this->childView);

        $this->dataExtractor->expects($this->at(0))
            ->method('extractConfiguration')
            ->with($this->form)
            ->willReturn(['config' => 'foo']);
        $this->dataExtractor->expects($this->at(1))
            ->method('extractConfiguration')
            ->with($this->childForm)
            ->willReturn(['config' => 'bar']);

        // explicitly call collectConfiguration(), since $this->childForm is not
        // contained in the form tree
        $this->dataCollector->collectConfiguration($this->form);
        $this->dataCollector->collectConfiguration($this->childForm);
        $this->dataCollector->buildFinalFormTree($this->form, $this->view);

        $childFormData = [
            'config' => 'bar',
            'children' => [],
        ];

        $formData = [
            'config' => 'foo',
            'children' => [
                'child' => $childFormData,
            ],
        ];

        $this->assertSame([
            'forms' => [
                'name' => $formData,
            ],
            'forms_by_hash' => [
                spl_object_hash($this->form) => $formData,
                spl_object_hash($this->childForm) => $childFormData,
            ],
            'nb_errors' => 0,
        ], $this->dataCollector->getData());
    }

    public function testCollectSubmittedDataCountsErrors()
    {
        $form1 = $this->createForm('form1');
        $childForm1 = $this->createForm('child1');
        $form2 = $this->createForm('form2');

        $form1->add($childForm1);
        $this->dataExtractor
             ->method('extractConfiguration')
             ->willReturn([]);
        $this->dataExtractor
             ->method('extractDefaultData')
             ->willReturn([]);
        $this->dataExtractor->expects($this->at(4))
            ->method('extractSubmittedData')
            ->with($form1)
            ->willReturn(['errors' => ['foo']]);
        $this->dataExtractor->expects($this->at(5))
            ->method('extractSubmittedData')
            ->with($childForm1)
            ->willReturn(['errors' => ['bar', 'bam']]);
        $this->dataExtractor->expects($this->at(8))
            ->method('extractSubmittedData')
            ->with($form2)
            ->willReturn(['errors' => ['baz']]);

        $this->dataCollector->collectSubmittedData($form1);

        $data = $this->dataCollector->getData();
        $this->assertSame(3, $data['nb_errors']);

        $this->dataCollector->collectSubmittedData($form2);

        $data = $this->dataCollector->getData();
        $this->assertSame(4, $data['nb_errors']);
    }

    public function testCollectSubmittedDataExpandedFormsErrors()
    {
        $child1Form = $this->createForm('child1');
        $child11Form = $this->createForm('child11');
        $child2Form = $this->createForm('child2');
        $child21Form = $this->createForm('child21');

        $child1Form->add($child11Form);
        $child2Form->add($child21Form);
        $this->form->add($child1Form);
        $this->form->add($child2Form);

        $this->dataExtractor
            ->method('extractConfiguration')
            ->willReturn([]);
        $this->dataExtractor
            ->method('extractDefaultData')
            ->willReturn([]);
        $this->dataExtractor->expects($this->at(10))
            ->method('extractSubmittedData')
            ->with($this->form)
            ->willReturn(['errors' => []]);
        $this->dataExtractor->expects($this->at(11))
            ->method('extractSubmittedData')
            ->with($child1Form)
            ->willReturn(['errors' => []]);
        $this->dataExtractor->expects($this->at(12))
            ->method('extractSubmittedData')
            ->with($child11Form)
            ->willReturn(['errors' => ['foo']]);
        $this->dataExtractor->expects($this->at(13))
            ->method('extractSubmittedData')
            ->with($child2Form)
            ->willReturn(['errors' => []]);
        $this->dataExtractor->expects($this->at(14))
            ->method('extractSubmittedData')
            ->with($child21Form)
            ->willReturn(['errors' => []]);

        $this->dataCollector->collectSubmittedData($this->form);
        $this->dataCollector->buildPreliminaryFormTree($this->form);

        $data = $this->dataCollector->getData();
        $formData = $data['forms']['name'];
        $child1Data = $formData['children']['child1'];
        $child11Data = $child1Data['children']['child11'];
        $child2Data = $formData['children']['child2'];
        $child21Data = $child2Data['children']['child21'];

        $this->assertTrue($formData['has_children_error']);
        $this->assertTrue($child1Data['has_children_error']);
        $this->assertArrayNotHasKey('has_children_error', $child11Data, 'The leaf data does not contains "has_children_error" property.');
        $this->assertFalse($child2Data['has_children_error']);
        $this->assertArrayNotHasKey('has_children_error', $child21Data, 'The leaf data does not contains "has_children_error" property.');
    }

    public function testReset()
    {
        $form = $this->createForm('my_form');

        $this->dataExtractor->expects($this->any())
            ->method('extractConfiguration')
            ->willReturn([]);
        $this->dataExtractor->expects($this->any())
            ->method('extractDefaultData')
            ->willReturn([]);
        $this->dataExtractor->expects($this->any())
            ->method('extractSubmittedData')
            ->with($form)
            ->willReturn(['errors' => ['baz']]);

        $this->dataCollector->buildPreliminaryFormTree($form);
        $this->dataCollector->collectSubmittedData($form);

        $this->dataCollector->reset();

        $this->assertSame(
            [
                'forms' => [],
                'forms_by_hash' => [],
                'nb_errors' => 0,
            ],
            $this->dataCollector->getData()
        );
    }

    private function createForm($name)
    {
        $builder = new FormBuilder($name, null, $this->dispatcher, $this->factory);
        $builder->setCompound(true);
        $builder->setDataMapper($this->dataMapper);

        return $builder->getForm();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
