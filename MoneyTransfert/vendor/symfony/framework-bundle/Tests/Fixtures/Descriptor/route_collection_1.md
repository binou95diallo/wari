<<<<<<< HEAD
route_1
-------

- Path: /hello/{name}
- Path Regex: #PATH_REGEX#
- Host: localhost
- Host Regex: #HOST_REGEX#
- Scheme: http|https
- Method: GET|HEAD
- Class: Symfony\Bundle\FrameworkBundle\Tests\Console\Descriptor\RouteStub
- Defaults: 
    - `name`: Joseph
- Requirements: 
    - `name`: [a-z]+
- Options: 
    - `compiler_class`: Symfony\Component\Routing\RouteCompiler
    - `opt1`: val1
    - `opt2`: val2


route_2
-------

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
- Condition: context.getMethod() in ['GET', 'HEAD', 'POST']

=======
route_1
-------

- Path: /hello/{name}
- Path Regex: #PATH_REGEX#
- Host: localhost
- Host Regex: #HOST_REGEX#
- Scheme: http|https
- Method: GET|HEAD
- Class: Symfony\Bundle\FrameworkBundle\Tests\Console\Descriptor\RouteStub
- Defaults: 
    - `name`: Joseph
- Requirements: 
    - `name`: [a-z]+
- Options: 
    - `compiler_class`: Symfony\Component\Routing\RouteCompiler
    - `opt1`: val1
    - `opt2`: val2


route_2
-------

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
- Condition: context.getMethod() in ['GET', 'HEAD', 'POST']

>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
