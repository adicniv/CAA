<?php
/****
 * Get a named lock
 */
GET_LOCK()
/******
 * Whether the named lock is free
 */
IS_FREE_LOCK()
/****
 * Whether the named lock is in use; return connection identifier if true
 */
IS_USED_LOCK()
/*****
 * Release all current named locks
 */
RELEASE_ALL_LOCKS()
/********
 * Release the named lock
 */
RELEASE_LOCK()