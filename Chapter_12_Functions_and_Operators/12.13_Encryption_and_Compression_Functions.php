<?php
/****
 * Decrypt using AES
 */
AES_DECRYPT()
/******
 * Encrypt using AES
 */
AES_ENCRYPT()
/*******
 * Decrypt ciphertext using private or public key
 */
ASYMMETRIC_DECRYPT()
/******
 * Derive symmetric key from asymmetric keys
 */
ASYMMETRIC_DERIVE()
/*******
 * Encrypt cleartext using private or public key
 */
ASYMMETRIC_ENCRYPT()
/********
 * Generate signature from digest
 */
ASYMMETRIC_SIGN()
/******
 * 	Verify that signature matches digest
 */
ASYMMETRIC_VERIFY()
/******
 * Return result as a binary string
 */
COMPRESS()
/*****
 * Create private key
 */
CREATE_ASYMMETRIC_PRIV_KEY()
/*******
 * Create public key
 */
CREATE_ASYMMETRIC_PUB_KEY()
/**********
 * Generate shared DH secret
 */
CREATE_DH_PARAMETERS()
/*********
 * 	Generate digest from string
 */
CREATE_DIGEST()
/********
 * Decode a string encrypted using ENCODE()
 */
DECODE()
/******
 * 	Decrypt a string
 */
DES_DECRYPT()
/******
 * Encrypt a string
 */
DES_ENCRYPT()
/*****
 * Encode a string
 */
ENCODE()
/*******
 * Encrypt a string
 */
ENCRYPT()
/********
 * Calculate MD5 checksum
 */
MD5()
/******
 * Calculate and return a password string
 */
PASSWORD()
/*******
 * Return a random byte vector
 */
RANDOM_BYTES()
/******
 * Calculate an SHA-1 160-bit checksum
 */
SHA1(), SHA()
/*********
 * Calculate an SHA-2 checksum
 */
SHA2()
/*****
 * Compute statement digest hash value
 */
STATEMENT_DIGEST()
/********
 * Compute normalized statement digest
 */
STATEMENT_DIGEST_TEXT()
/*******
 * Uncompress a string compressed
 */
UNCOMPRESS()
/*****
 * Return the length of a string before compression
 */
 UNCOMPRESSED_LENGTH()
 /******
  * Determine strength of password
  */
VALIDATE_PASSWORD_STRENGTH()
 