<?php
class Quickhash{
    function function_name($param) {
        class QuickHashIntSet {
            /* Constants */
            const integer CHECK_FOR_DUPES = 1 ;
            const integer DO_NOT_USE_ZEND_ALLOC = 2 ;
            const integer HASHER_NO_HASH = 256 ;
            const integer HASHER_JENKINS1 = 512 ;
            const integer HASHER_JENKINS2 = 1024 ;
            /* Methods */
            public add ( int $key ) : bool
            public __construct ( int $size [, int $options ] )
            public delete ( int $key ) : bool
            public exists ( int $key ) : bool
            publicgetSize ( void ) : int
            public static loadFromFile ( string $filename [, int $size [, int $options ]] ) : QuickHashIntSet
            public static loadFromString ( string $contents [, int $size [, int $options ]] ) : QuickHashIntSet
            public saveToFile ( string $filename ) : void
            public saveToString ( void ) : string
        }
        class QuickHashIntHash {
            /* Constants */
            const integer CHECK_FOR_DUPES = 1 ;
            const integer DO_NOT_USE_ZEND_ALLOC = 2 ;
            const integer HASHER_NO_HASH = 256 ;
            const integer HASHER_JENKINS1 = 512 ;
            const integer HASHER_JENKINS2 = 1024 ;
            /* Methods */
            public add ( int $key [, int $value ] ) : bool
            public __construct ( int $size [, int $options ] )
            public delete ( int $key ) : bool
            public exists ( int $key ) : bool
            public get ( int $key ) : int
            public getSize ( void ) : int
            public static loadFromFile ( string $filename [, int $options ] ) : QuickHashIntHash
            public static loadFromString ( string $contents [, int $options ] ) : QuickHashIntHash
            public saveToFile ( string $filename ) : void
            public saveToString ( void ) : string
            public set ( int $key , int $value ) : bool
            public update ( int $key , int $value ) : bool
    }
    class QuickHashStringIntHash {
        /* Constants */
        const integer CHECK_FOR_DUPES = 1 ;
        const integer DO_NOT_USE_ZEND_ALLOC = 2 ;
        /* Methods */
        public add ( string $key , int $value ) : bool
        public __construct ( int $size [, int $options = 0 ] )
        public delete ( string $key ) : bool
        public exists ( string $key ) : bool
        public get ( string $key ) : mixed
        public getSize ( void ) : int
        public static loadFromFile ( string $filename [, int $size = 0 [, int $options = 0 ]] ) : QuickHashStringIntHash
        public static loadFromString ( string $contents [, int $size = 0 [, int $options = 0 ]] ) : QuickHashStringIntHash
        public saveToFile ( string $filename ) : void
        public saveToString ( void ) : string
        public set ( string $key , int $value ) : int
        public update ( string $key , int $value ) : bool
    }
    class QuickHashIntStringHash {
        /* Constants */
        const integer CHECK_FOR_DUPES = 1 ;
        const integer DO_NOT_USE_ZEND_ALLOC = 2 ;
        const integer HASHER_NO_HASH = 256 ;
        const integer HASHER_JENKINS1 = 512 ;
        const integer HASHER_JENKINS2 = 1024 ;
        /* Methods */
        public add ( int $key , string $value ) : bool
        public __construct ( int $size [, int $options = 0 ] )
        public delete ( int $key ) : bool
        public exists ( int $key ) : bool
        public get ( int $key ) : mixed
        public getSize ( void ) : int
        public static loadFromFile ( string $filename [, int $size = 0 [, int $options = 0 ]] ) : QuickHashIntStringHash
        public static loadFromString ( string $contents [, int $size = 0 [, int $options = 0 ]] ) : QuickHashIntStringHash
        public saveToFile ( string $filename ) : void
        public saveToString ( void ) : string
        public set ( int $key , string $value ) : int
        public update ( int $key , string $value ) : bool
    }
}