<<<<<<< HEAD
#!/bin/bash
EXECPATH=`dirname $0`
cd $EXECPATH
cd ..

rm build -Rf
sphinx-build en build

sphinx-build -b latex en build/pdf
=======
#!/bin/bash
EXECPATH=`dirname $0`
cd $EXECPATH
cd ..

rm build -Rf
sphinx-build en build

sphinx-build -b latex en build/pdf
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
rubber --into build/pdf --pdf build/pdf/Doctrine2ORM.tex