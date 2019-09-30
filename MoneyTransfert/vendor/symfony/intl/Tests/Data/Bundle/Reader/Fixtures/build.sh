<<<<<<< HEAD
#!/bin/bash

if [ -z "$ICU_BUILD_DIR" ]; then
    echo "Please set the ICU_BUILD_DIR environment variable"
    exit
fi

if [ ! -d "$ICU_BUILD_DIR" ]; then
    echo "The directory $ICU_BUILD_DIR pointed at by ICU_BUILD_DIR does not exist"
    exit
fi

DIR=`dirname $0`

rm $DIR/res/*.res

LD_LIBRARY_PATH=$ICU_BUILD_DIR/lib $ICU_BUILD_DIR/bin/genrb -d $DIR/res $DIR/txt/*.txt
=======
#!/bin/bash

if [ -z "$ICU_BUILD_DIR" ]; then
    echo "Please set the ICU_BUILD_DIR environment variable"
    exit
fi

if [ ! -d "$ICU_BUILD_DIR" ]; then
    echo "The directory $ICU_BUILD_DIR pointed at by ICU_BUILD_DIR does not exist"
    exit
fi

DIR=`dirname $0`

rm $DIR/res/*.res

LD_LIBRARY_PATH=$ICU_BUILD_DIR/lib $ICU_BUILD_DIR/bin/genrb -d $DIR/res $DIR/txt/*.txt
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
