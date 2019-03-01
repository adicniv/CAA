<?php
/**
 * The MongoDB\Driver\Manager is the main entry point to the extension. It is responsible for maintaining connections to MongoDB (be it standalone server, replica set, or sharded cluster).

No connection to MongoDB is made upon instantiating the Manager. This means the MongoDB\Driver\Manager can always be constructed, even though one or more MongoDB servers are down.

Any write or query can throw connection exceptions as connections are created lazily. A MongoDB server may also become unavailable during the life time of the script. It is therefore important that all actions on the Manager to be wrapped in try/catch statements.
 */
final MongoDB\Driver\Manager {
    /* 方法 */
    final public __construct ([ string $uri = "mongodb://127.0.0.1/" [, array $uriOptions = array() [, array $driverOptions = array() ]]] )
    final public executeBulkWrite ( string $namespace , MongoDB\Driver\BulkWrite $bulk [, array $options = array() ] ) : MongoDB\Driver\WriteResult
    final public executeCommand ( string $db , MongoDB\Driver\Command $command [, array $options = array() ] ) : MongoDB\Driver\Cursor
    final public executeQuery ( string $namespace , MongoDB\Driver\Query $query [, array $options = array() ] ) : MongoDB\Driver\Cursor
    final public executeReadCommand ( string $db , MongoDB\Driver\Command $command [, array $options = array() ] ) : MongoDB\Driver\Cursor
    final public executeReadWriteCommand ( string $db , MongoDB\Driver\Command $command [, array $options = array() ] ) : MongoDB\Driver\Cursor
    final public executeWriteCommand ( string $db , MongoDB\Driver\Command $command [, array $options = array() ] ) : MongoDB\Driver\Cursor
    final public getReadConcern ( void ) : MongoDB\Driver\ReadConcern
    final public getReadPreference ( void ) : MongoDB\Driver\ReadPreference
    final public getServers ( void ) : array
    final public getWriteConcern ( void ) : MongoDB\Driver\WriteConcern
    final public selectServer ( MongoDB\Driver\ReadPreference $readPreference ) : MongoDB\Driver\Server
    final public startSession ([ array $options ] ) : MongoDB\Driver\Session
}
    /***
     * The MongoDB\Driver\Command class is a value object that represents a database command.

To provide Command Helpers the MongoDB\Driver\Command object should be composed.
     */
final MongoDB\Driver\Command {
    /* 方法 */
    final public __construct ( array|object $document [, array $commandOptions ] )
}
    /***
     * The MongoDB\Driver\Query class is a value object that represents a database query.
     */
final MongoDB\Driver\Query {
    /* 方法 */
    final public __construct ( array|object $filter [, array $queryOptions ] )
}
    /**
     * 
     * The MongoDB\Driver\BulkWrite collects one or more write operations that should be sent to the server. After adding any number of insert, update, and delete operations, the collection may be executed via MongoDB\Driver\Manager::executeBulkWrite().

Write operations may either be ordered (default) or unordered. Ordered write operations are sent to the server, in the order provided, for serial execution. If a write fails, any remaining operations will be aborted. Unordered operations are sent to the server in an arbitrary order where they may be executed in parallel. Any errors that occur are reported after all operations have been attempted.
     */
final MongoDB\Driver\BulkWrite implements Countable {
    /* 方法 */
    public __construct ([ array $options ] )
    public count ( void ) : int
    public delete ( array|object $filter [, array $deleteOptions ] ) : void
    public insert ( array|object $document ) : mixed
    public update ( array|object $filter , array|object $newObj [, array $updateOptions ] ) : void
}
    /**
     * MongoDB\Driver\WriteConcern describes the level of acknowledgement requested from MongoDB for write operations to a standalone mongod or to replica sets or to sharded clusters. In sharded clusters, mongos instances will pass the write concern on to the shards.
     */
final MongoDB\Driver\WriteConcern implements MongoDB\BSON\Serializable {
    /* Constants */
    const string MAJORITY = "majority" ;
    /* 方法 */
    final public bsonSerialize ( void ) : object
    final public __construct ( string|integer $w [, int $wtimeout [, bool $journal ]] )
    final public getJournal ( void ) : boolean|null
    final public getW ( void ) : string|integer|null
    final public getWtimeout ( void ) : int
    final public isDefault ( void ) : bool
}
    /**
     * 
     * 
     */
final MongoDB\Driver\ReadPreference implements MongoDB\BSON\Serializable {
    /* Constants */
    const integer RP_PRIMARY = 1 ;
    const integer RP_PRIMARY_PREFERRED = 5 ;
    const integer RP_SECONDARY = 2 ;
    const integer RP_SECONDARY_PREFERRED = 6 ;
    const integer RP_NEAREST = 10 ;
    const integer NO_MAX_STALENESS = -1 ;
    const integer SMALLEST_MAX_STALENESS_SECONDS = 90 ;
    /* 方法 */
    final public bsonSerialize ( void ) : object
    final public __construct ( string|integer $mode [, array $tagSets = NULL [, array $options = array() ]] )
    final public getMaxStalenessSeconds ( void ) : int
    final public getMode ( void ) : int
    final public getTagSets ( void ) : array
}
    /**
     * MongoDB\Driver\ReadConcern controls the level of isolation for read operations for replica sets and replica set shards. This option requires MongoDB 3.2 or later.
     */
final MongoDB\Driver\ReadConcern implements MongoDB\BSON\Serializable {
    /* Constants */
    const string AVAILABLE = "available" ;
    const string LINEARIZABLE = "linearizable" ;
    const string LOCAL = "local" ;
    const string MAJORITY = "majority" ;
    /* 方法 */
    final public bsonSerialize ( void ) : object
    final public __construct ([ string $level ] )
    final public getLevel ( void ) : string|null
    final public isDefault ( void ) : bool
}
    /**
     * 
     */
final MongoDB\Driver\Cursor implements Traversable {
    /* 方法 */
    final private __construct ( void )
    final public getId ( void ) : MongoDB\Driver\CursorId
    final public getServer ( void ) : MongoDB\Driver\Server
    final public isDead ( void ) : bool
    final public setTypeMap ( array $typemap ) : void
    final public toArray ( void ) : array
}
    /**
     * The MongoDB\Driver\CursorID class is a value object that represents a cursor ID. Instances of this class are returned by MongoDB\Driver\Cursor::getId().
     */
final MongoDB\Driver\CursorId {
    /* 方法 */
    final private __construct ( void )
    final public __toString ( void ) : string
}
    
/**
 * 
 */
    final MongoDB\Driver\Server {
/* Constants */
const integer TYPE_UNKNOWN = 0 ;
const integer TYPE_STANDALONE = 1 ;
const integer TYPE_MONGOS = 2 ;
const integer TYPE_POSSIBLE_PRIMARY = 3 ;
const integer TYPE_RS_PRIMARY = 4 ;
const integer TYPE_RS_SECONDARY = 5 ;
const integer TYPE_RS_ARBITER = 6 ;
const integer TYPE_RS_OTHER = 7 ;
const integer TYPE_RS_GHOST = 8 ;
/* 方法 */
final private __construct ( void )
final public executeBulkWrite ( string $namespace , MongoDB\Driver\BulkWrite $bulk [, array $options = array() ] ) : MongoDB\Driver\WriteResult
final public executeCommand ( string $db , MongoDB\Driver\Command $command [, array $options = array() ] ) : MongoDB\Driver\Cursor
final public executeQuery ( string $namespace , MongoDB\Driver\Query $query [, array $options = array() ] ) : MongoDB\Driver\Cursor
final public executeReadCommand ( string $db , MongoDB\Driver\Command $command [, array $options = array() ] ) : MongoDB\Driver\Cursor
final public executeReadWriteCommand ( string $db , MongoDB\Driver\Command $command [, array $options = array() ] ) : MongoDB\Driver\Cursor
final public executeWriteCommand ( string $db , MongoDB\Driver\Command $command [, array $options = array() ] ) : MongoDB\Driver\Cursor
final public getHost ( void ) : string
final public getInfo ( void ) : array
final public getLatency ( void ) : string
final public getPort ( void ) : int
final public getTags ( void ) : array
final public getType ( void ) : int
final public isArbiter ( void ) : bool
final public isHidden ( void ) : bool
final public isPassive ( void ) : bool
final public isPrimary ( void ) : bool
final public isSecondary ( void ) : bool
}
/**
 * The MongoDB\Driver\WriteConcernError class encapsulates information about a write concern error and may be returned by MongoDB\Driver\WriteResult::getWriteConcernError().
 */
final MongoDB\Driver\WriteConcernError {
    /* 方法 */
    final public getCode ( void ) : int
    final public getInfo ( void ) : mixed
    final public getMessage ( void ) : string
}
    /**
     * The MongoDB\Driver\WriteError class encapsulates information about a write error and may be returned as an array element from MongoDB\Driver\WriteResult::getWriteErrors().
     */
final MongoDB\Driver\WriteError {
    /* 方法 */
    final public getCode ( void ) : int
    final public getIndex ( void ) : int
    final public getInfo ( void ) : mixed
    final public getMessage ( void ) : string
}
    /**
     * 
     * The MongoDB\Driver\WriteResult class encapsulates information about an executed MongoDB\Driver\BulkWrite and may be returned by MongoDB\Driver\Manager::executeBulkWrite().
     */
final MongoDB\Driver\WriteResult {
/* 方法 */
final public getDeletedCount ( void ) : integer|null
final public getInsertedCount ( void ) : integer|null
final public getMatchedCount ( void ) : integer|null
final public getModifiedCount ( void ) : integer|null
final public getServer ( void ) : MongoDB\Driver\Server
final public getUpsertedCount ( void ) : integer|null
final public getUpsertedIds ( void ) : array
final public getWriteConcernError ( void ) : MongoDB\Driver\WriteConcernError|null
final public getWriteErrors ( void ) : array
final public isAcknowledged ( void ) : bool
}