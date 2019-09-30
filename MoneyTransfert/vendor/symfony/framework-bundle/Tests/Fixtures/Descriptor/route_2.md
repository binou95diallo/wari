<<<<<<< HEAD
- Path: /name/add
- Path Regex: #PATH_REGEX#
- Host: localhost
- Host Regex: #HOST_REGEX#
- Scheme: http|https
- Method: PUT|POST
- Class: Symfony\Bundle\FrameworkBundle\Tests\Console\Descriptor\RouteStub
- Defaults: NONE
- Requirements: NO CUSTOM
- Options: 
    - `compiler_class`: Symfony\Component\Routing\RouteCompiler
    - `opt1`: val1
    - `opt2`: val2
=======
- Path: /name/add
- Path Regex: #PATH_REGEX#
- Host: localhost
- Host Regex: #HOST_REGEX#
- Scheme: http|https
- Method: PUT|POST
- Class: Symfony\Bundle\FrameworkBundle\Tests\Console\Descriptor\RouteStub
- Defaults: NONE
- Requirements: NO CUSTOM
- Options: 
    - `compiler_class`: Symfony\Component\Routing\RouteCompiler
    - `opt1`: val1
    - `opt2`: val2
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
- Condition: context.getMethod() in ['GET', 'HEAD', 'POST']