<?php

namespace Safe;

use Safe\Exceptions\OpensslException;

/**
 * openssl_csr_export_to_file takes the Certificate
 * Signing Request represented by csr and saves it
 * in PEM format into the file named by outfilename.
 *
 * @param string|resource $csr See CSR parameters for a list of valid values.
 * @param string $outfilename Path to the output file.
 * @param bool $notext
 * The optional parameter notext affects
 * the verbosity of the output; if it is FALSE, then additional human-readable
 * information is included in the output. The default value of
 * notext is TRUE.
 * @throws OpensslException
 *
 */
function openssl_csr_export_to_file($csr, string $outfilename, bool $notext = true): void
{
    error_clear_last();
    $result = \openssl_csr_export_to_file($csr, $outfilename, $notext);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_csr_export takes the Certificate Signing
 * Request represented by csr and stores it in
 * PEM format in out, which is passed by
 * reference.
 *
 * @param string|resource $csr See CSR parameters for a list of valid values.
 * @param string $out on success, this string will contain the PEM encoded CSR
 * @param bool $notext
 * The optional parameter notext affects
 * the verbosity of the output; if it is FALSE, then additional human-readable
 * information is included in the output. The default value of
 * notext is TRUE.
 * @throws OpensslException
 *
 */
function openssl_csr_export($csr, string &$out, bool $notext = true): void
{
    error_clear_last();
    $result = \openssl_csr_export($csr, $out, $notext);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_csr_get_subject returns subject
 * distinguished name information encoded in the csr
 * including fields commonName (CN), organizationName (O), countryName (C) etc.
 *
 * @param string|resource $csr See CSR parameters for a list of valid values.
 * @param bool $use_shortnames shortnames controls how the data is indexed in the
 * array - if shortnames is TRUE (the default) then
 * fields will be indexed with the short name form, otherwise, the long name
 * form will be used - e.g.: CN is the shortname form of commonName.
 * @return array Returns TRUE on success .
 * @throws OpensslException
 *
 */
function openssl_csr_get_subject($csr, bool $use_shortnames = true): array
{
    error_clear_last();
    $result = \openssl_csr_get_subject($csr, $use_shortnames);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
    return $result;
}


/**
 * openssl_csr_new generates a new CSR (Certificate Signing Request)
 * based on the information provided by dn.
 *
 * @param array $dn The Distinguished Name or subject fields to be used in the certificate.
 * @param resource $privkey privkey should be set to a private key that was
 * previously generated by openssl_pkey_new (or
 * otherwise obtained from the other openssl_pkey family of functions).
 * The corresponding public portion of the key will be used to sign the
 * CSR.
 * @param array $configargs By default, the information in your system openssl.conf
 * is used to initialize the request; you can specify a configuration file
 * section by setting the config_section_section key of
 * configargs.  You can also specify an alternative
 * openssl configuration file by setting the value of the
 * config key to the path of the file you want to use.
 * The following keys, if present in configargs
 * behave as their equivalents in the openssl.conf, as
 * listed in the table below.
 *
 * Configuration overrides
 *
 *
 *
 * configargs key
 * type
 * openssl.conf equivalent
 * description
 *
 *
 *
 *
 * digest_alg
 * string
 * default_md
 * Digest method or signature hash, usually one of openssl_get_md_methods
 *
 *
 * x509_extensions
 * string
 * x509_extensions
 * Selects which extensions should be used when creating an x509
 * certificate
 *
 *
 * req_extensions
 * string
 * req_extensions
 * Selects which extensions should be used when creating a CSR
 *
 *
 * private_key_bits
 * integer
 * default_bits
 * Specifies how many bits should be used to generate a private
 * key
 *
 *
 * private_key_type
 * integer
 * none
 * Specifies the type of private key to create.  This can be one
 * of OPENSSL_KEYTYPE_DSA,
 * OPENSSL_KEYTYPE_DH,
 * OPENSSL_KEYTYPE_RSA or
 * OPENSSL_KEYTYPE_EC.
 * The default value is OPENSSL_KEYTYPE_RSA.
 *
 *
 *
 * encrypt_key
 * boolean
 * encrypt_key
 * Should an exported key (with passphrase) be encrypted?
 *
 *
 * encrypt_key_cipher
 * integer
 * none
 *
 * One of cipher constants.
 *
 *
 *
 * curve_name
 * string
 * none
 *
 * PHP 7.1+, One of openssl_get_curve_names.
 *
 *
 *
 * config
 * string
 * N/A
 *
 * Path to your own alternative openssl.conf file.
 *
 *
 *
 *
 *
 * @param array $extraattribs extraattribs is used to specify additional
 * configuration options for the CSR.  Both dn and
 * extraattribs are associative arrays whose keys are
 * converted to OIDs and applied to the relevant part of the request.
 * @return resource Returns the CSR .
 * @throws OpensslException
 *
 */
function openssl_csr_new(array $dn, &$privkey, array $configargs = null, array $extraattribs = null)
{
    error_clear_last();
    if ($extraattribs !== null) {
        $result = \openssl_csr_new($dn, $privkey, $configargs, $extraattribs);
    } elseif ($configargs !== null) {
        $result = \openssl_csr_new($dn, $privkey, $configargs);
    } else {
        $result = \openssl_csr_new($dn, $privkey);
    }
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
    return $result;
}


/**
 * Takes a raw or base64 encoded string and decrypts it using a given method and key.
 *
 * @param string $data The encrypted message to be decrypted.
 * @param string $method The cipher method. For a list of available cipher methods, use
 * openssl_get_cipher_methods.
 * @param string $key The key.
 * @param int $options options can be one of
 * OPENSSL_RAW_DATA,
 * OPENSSL_ZERO_PADDING.
 * @param string $iv A non-NULL Initialization Vector.
 * @param string $tag The authentication tag in AEAD cipher mode. If it is incorrect, the authentication fails and the function returns FALSE.
 * @param string $aad Additional authentication data.
 * @return string The decrypted string on success .
 * @throws OpensslException
 *
 */
function openssl_decrypt(string $data, string $method, string $key, int $options = 0, string $iv = "", string $tag = "", string $aad = ""): string
{
    error_clear_last();
    $result = \openssl_decrypt($data, $method, $key, $options, $iv, $tag, $aad);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
    return $result;
}


/**
 * The shared secret returned by openssl_dh_compute_key is
 * often used as an encryption key to secretly communicate with a remote party.
 * This is known as the Diffie-Hellman key exchange.
 *
 * @param string $pub_key DH Public key of the remote party.
 * @param resource $dh_key A local DH private key, corresponding to the public key to be shared with the remote party.
 * @return string Returns shared secret on success .
 * @throws OpensslException
 *
 */
function openssl_dh_compute_key(string $pub_key, $dh_key): string
{
    error_clear_last();
    $result = \openssl_dh_compute_key($pub_key, $dh_key);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
    return $result;
}


/**
 * Computes a digest hash value for the given data using a given method,
 * and returns a raw or binhex encoded string.
 *
 * @param string $data The data.
 * @param string $method The digest method to use, e.g. "sha256", see openssl_get_md_methods for a list of available digest methods.
 * @param bool $raw_output Setting to TRUE will return as raw output data, otherwise the return
 * value is binhex encoded.
 * @return string Returns the digested hash value on success .
 * @throws OpensslException
 *
 */
function openssl_digest(string $data, string $method, bool $raw_output = false): string
{
    error_clear_last();
    $result = \openssl_digest($data, $method, $raw_output);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
    return $result;
}


/**
 * Encrypts given data with given method and key, returns a raw
 * or base64 encoded string
 *
 * @param string $data The plaintext message data to be encrypted.
 * @param string $method The cipher method. For a list of available cipher methods, use openssl_get_cipher_methods.
 * @param string $key The key.
 * @param int $options options is a bitwise disjunction of the flags
 * OPENSSL_RAW_DATA and
 * OPENSSL_ZERO_PADDING.
 * @param string $iv A non-NULL Initialization Vector.
 * @param string $tag The authentication tag passed by reference when using AEAD cipher mode (GCM or CCM).
 * @param string $aad Additional authentication data.
 * @param int $tag_length The length of the authentication tag. Its value can be between 4 and 16 for GCM mode.
 * @return string Returns the encrypted string on success .
 * @throws OpensslException
 *
 */
function openssl_encrypt(string $data, string $method, string $key, int $options = 0, string $iv = "", string &$tag = null, string $aad = "", int $tag_length = 16): string
{
    error_clear_last();
    $result = \openssl_encrypt($data, $method, $key, $options, $iv, $tag, $aad, $tag_length);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
    return $result;
}


/**
 * openssl_open opens (decrypts)
 * sealed_data using the private key associated with
 * the key identifier priv_key_id and the envelope key
 * env_key, and fills
 * open_data with the decrypted data.
 * The envelope key is generated when the
 * data are sealed and can only be used by one specific private key. See
 * openssl_seal for more information.
 *
 * @param string $sealed_data
 * @param string $open_data If the call is successful the opened data is returned in this
 * parameter.
 * @param string $env_key
 * @param string|array|resource $priv_key_id
 * @param string $method The cipher method.
 * @param string $iv The initialization vector.
 * @throws OpensslException
 *
 */
function openssl_open(string $sealed_data, string &$open_data, string $env_key, $priv_key_id, string $method = "RC4", string $iv = null): void
{
    error_clear_last();
    if ($iv !== null) {
        $result = \openssl_open($sealed_data, $open_data, $env_key, $priv_key_id, $method, $iv);
    } else {
        $result = \openssl_open($sealed_data, $open_data, $env_key, $priv_key_id, $method);
    }
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_pbkdf2 computes PBKDF2 (Password-Based Key Derivation Function 2),
 * a key derivation function defined in PKCS5 v2.
 *
 * @param string $password Password from which the derived key is generated.
 * @param string $salt PBKDF2 recommends a crytographic salt of at least 64 bits (8 bytes).
 * @param int $key_length Length of desired output key.
 * @param int $iterations The number of iterations desired. NIST
 * recommends at least 10,000.
 * @param string $digest_algorithm Optional hash or digest algorithm from openssl_get_md_methods.  Defaults to SHA-1.
 * @return string Returns raw binary string .
 * @throws OpensslException
 *
 */
function openssl_pbkdf2(string $password, string $salt, int $key_length, int $iterations, string $digest_algorithm = "sha1"): string
{
    error_clear_last();
    $result = \openssl_pbkdf2($password, $salt, $key_length, $iterations, $digest_algorithm);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
    return $result;
}


/**
 * openssl_pkcs12_export_to_file stores
 * x509 into a file named by
 * filename in a PKCS#12 file format.
 *
 * @param string|resource $x509 See Key/Certificate parameters for a list of valid values.
 * @param string $filename Path to the output file.
 * @param string|array|resource $priv_key Private key component of PKCS#12 file.
 * See Public/Private Key parameters for a list of valid values.
 * @param string $pass Encryption password for unlocking the PKCS#12 file.
 * @param array $args Optional array, other keys will be ignored.
 *
 *
 *
 *
 * Key
 * Description
 *
 *
 *
 *
 * "extracerts"
 * array of extra certificates or a single certificate to be included in the PKCS#12 file.
 *
 *
 * "friendlyname"
 * string to be used for the supplied certificate and key
 *
 *
 *
 *
 * @throws OpensslException
 *
 */
function openssl_pkcs12_export_to_file($x509, string $filename, $priv_key, string $pass, array $args = null): void
{
    error_clear_last();
    if ($args !== null) {
        $result = \openssl_pkcs12_export_to_file($x509, $filename, $priv_key, $pass, $args);
    } else {
        $result = \openssl_pkcs12_export_to_file($x509, $filename, $priv_key, $pass);
    }
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_pkcs12_export stores
 * x509 into a string named by
 * out in a PKCS#12 file format.
 *
 * @param string|resource $x509 See Key/Certificate parameters for a list of valid values.
 * @param string $out On success, this will hold the PKCS#12.
 * @param string|array|resource $priv_key Private key component of PKCS#12 file.
 * See Public/Private Key parameters for a list of valid values.
 * @param string $pass Encryption password for unlocking the PKCS#12 file.
 * @param array $args Optional array, other keys will be ignored.
 *
 *
 *
 *
 * Key
 * Description
 *
 *
 *
 *
 * "extracerts"
 * array of extra certificates or a single certificate to be included in the PKCS#12 file.
 *
 *
 * "friendlyname"
 * string to be used for the supplied certificate and key
 *
 *
 *
 *
 * @throws OpensslException
 *
 */
function openssl_pkcs12_export($x509, string &$out, $priv_key, string $pass, array $args = null): void
{
    error_clear_last();
    if ($args !== null) {
        $result = \openssl_pkcs12_export($x509, $out, $priv_key, $pass, $args);
    } else {
        $result = \openssl_pkcs12_export($x509, $out, $priv_key, $pass);
    }
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_pkcs12_read parses the PKCS#12 certificate store supplied by
 * pkcs12 into a array named
 * certs.
 *
 * @param string $pkcs12 The certificate store contents, not its file name.
 * @param array $certs On success, this will hold the Certificate Store Data.
 * @param string $pass Encryption password for unlocking the PKCS#12 file.
 * @throws OpensslException
 *
 */
function openssl_pkcs12_read(string $pkcs12, array &$certs, string $pass): void
{
    error_clear_last();
    $result = \openssl_pkcs12_read($pkcs12, $certs, $pass);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * Decrypts the S/MIME encrypted message contained in the file specified by
 * infilename using the certificate and its
 * associated private key specified by recipcert and
 * recipkey.
 *
 * @param string $infilename
 * @param string $outfilename The decrypted message is written to the file specified by
 * outfilename.
 * @param string|resource $recipcert
 * @param string|resource|array $recipkey
 * @throws OpensslException
 *
 */
function openssl_pkcs7_decrypt(string $infilename, string $outfilename, $recipcert, $recipkey = null): void
{
    error_clear_last();
    if ($recipkey !== null) {
        $result = \openssl_pkcs7_decrypt($infilename, $outfilename, $recipcert, $recipkey);
    } else {
        $result = \openssl_pkcs7_decrypt($infilename, $outfilename, $recipcert);
    }
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_pkcs7_encrypt takes the contents of the
 * file named infile and encrypts them using an RC2
 * 40-bit cipher so that they can only be read by the intended recipients
 * specified by recipcerts.
 *
 * @param string $infile
 * @param string $outfile
 * @param string|resource|array $recipcerts Either a lone X.509 certificate, or an array of X.509 certificates.
 * @param array $headers headers is an array of headers that
 * will be prepended to the data after it has been encrypted.
 *
 * headers can be either an associative array
 * keyed by header name, or an indexed array, where each element contains
 * a single header line.
 * @param int $flags flags can be used to specify options that affect
 * the encoding process - see PKCS7
 * constants.
 * @param int $cipherid One of cipher constants.
 * @throws OpensslException
 *
 */
function openssl_pkcs7_encrypt(string $infile, string $outfile, $recipcerts, array $headers, int $flags = 0, int $cipherid = OPENSSL_CIPHER_RC2_40): void
{
    error_clear_last();
    $result = \openssl_pkcs7_encrypt($infile, $outfile, $recipcerts, $headers, $flags, $cipherid);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 *
 *
 * @param string $infilename
 * @param array $certs
 * @throws OpensslException
 *
 */
function openssl_pkcs7_read(string $infilename, array &$certs): void
{
    error_clear_last();
    $result = \openssl_pkcs7_read($infilename, $certs);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_pkcs7_sign takes the contents of the file
 * named infilename and signs them using the
 * certificate and its matching private key specified by
 * signcert and privkey
 * parameters.
 *
 * @param string $infilename The input file you are intending to digitally sign.
 * @param string $outfilename The file which the digital signature will be written to.
 * @param string|resource $signcert The X.509 certificate used to digitally sign infilename.
 * See Key/Certificate parameters for a list of valid values.
 * @param string|resource|array $privkey privkey is the private key corresponding to signcert.
 * See Public/Private Key parameters for a list of valid values.
 * @param array $headers headers is an array of headers that
 * will be prepended to the data after it has been signed (see
 * openssl_pkcs7_encrypt for more information about
 * the format of this parameter).
 * @param int $flags flags can be used to alter the output - see PKCS7 constants.
 * @param string $extracerts extracerts specifies the name of a file containing
 * a bunch of extra certificates to include in the signature which can for
 * example be used to help the recipient to verify the certificate that you used.
 * @throws OpensslException
 *
 */
function openssl_pkcs7_sign(string $infilename, string $outfilename, $signcert, $privkey, array $headers, int $flags = PKCS7_DETACHED, string $extracerts = null): void
{
    error_clear_last();
    if ($extracerts !== null) {
        $result = \openssl_pkcs7_sign($infilename, $outfilename, $signcert, $privkey, $headers, $flags, $extracerts);
    } else {
        $result = \openssl_pkcs7_sign($infilename, $outfilename, $signcert, $privkey, $headers, $flags);
    }
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_pkey_export_to_file saves an ascii-armoured
 * (PEM encoded) rendition of key into the file named
 * by outfilename.
 *
 * @param resource|string|array $key
 * @param string $outfilename Path to the output file.
 * @param string $passphrase The key can be optionally protected by a
 * passphrase.
 * @param array $configargs configargs can be used to fine-tune the export
 * process by specifying and/or overriding options for the openssl
 * configuration file. See openssl_csr_new for more
 * information about configargs.
 * @throws OpensslException
 *
 */
function openssl_pkey_export_to_file($key, string $outfilename, string $passphrase = null, array $configargs = null): void
{
    error_clear_last();
    if ($configargs !== null) {
        $result = \openssl_pkey_export_to_file($key, $outfilename, $passphrase, $configargs);
    } elseif ($passphrase !== null) {
        $result = \openssl_pkey_export_to_file($key, $outfilename, $passphrase);
    } else {
        $result = \openssl_pkey_export_to_file($key, $outfilename);
    }
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_pkey_export exports
 * key as a PEM encoded string and stores it into
 * out (which is passed by reference).
 *
 * @param resource $key
 * @param string $out
 * @param string $passphrase The key is optionally protected by passphrase.
 * @param array $configargs configargs can be used to fine-tune the export
 * process by specifying and/or overriding options for the openssl
 * configuration file.  See openssl_csr_new for more
 * information about configargs.
 * @throws OpensslException
 *
 */
function openssl_pkey_export($key, string &$out, string $passphrase = null, array $configargs = null): void
{
    error_clear_last();
    if ($configargs !== null) {
        $result = \openssl_pkey_export($key, $out, $passphrase, $configargs);
    } elseif ($passphrase !== null) {
        $result = \openssl_pkey_export($key, $out, $passphrase);
    } else {
        $result = \openssl_pkey_export($key, $out);
    }
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_get_privatekey parses
 * key and prepares it for use by other functions.
 *
 * @param string $key key can be one of the following:
 *
 * a string having the format
 * file://path/to/file.pem. The named file must
 * contain a PEM encoded certificate/private key (it may contain both).
 *
 *
 * A PEM formatted private key.
 *
 * @param string $passphrase The optional parameter passphrase must be used
 * if the specified key is encrypted (protected by a passphrase).
 * @return resource Returns a positive key resource identifier on success, .
 * @throws OpensslException
 *
 */
function openssl_pkey_get_private($key, string $passphrase = "")
{
    error_clear_last();
    $result = \openssl_pkey_get_private($key, $passphrase);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
    return $result;
}


/**
 * openssl_get_publickey extracts the public key from
 * certificate and prepares it for use by other
 * functions.
 *
 * @param resource|string $certificate certificate can be one of the following:
 *
 * an X.509 certificate resource
 * a string having the format
 * file://path/to/file.pem. The named file must
 * contain a PEM encoded certificate/public key (it may contain both).
 *
 *
 * A PEM formatted public key.
 *
 * @return resource Returns a positive key resource identifier on success, .
 * @throws OpensslException
 *
 */
function openssl_pkey_get_public($certificate)
{
    error_clear_last();
    $result = \openssl_pkey_get_public($certificate);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
    return $result;
}


/**
 * openssl_pkey_new generates a new private and public
 * key pair.  The public component of the key can be obtained using
 * openssl_pkey_get_public.
 *
 * @param array $configargs You can finetune the key generation (such as specifying the number of
 * bits) using configargs.  See
 * openssl_csr_new for more information about
 * configargs.
 * @return resource Returns a resource identifier for the pkey on success, .
 * @throws OpensslException
 *
 */
function openssl_pkey_new(array $configargs = null)
{
    error_clear_last();
    if ($configargs !== null) {
        $result = \openssl_pkey_new($configargs);
    } else {
        $result = \openssl_pkey_new();
    }
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
    return $result;
}


/**
 * openssl_private_decrypt decrypts
 * data that was previously encrypted via
 * openssl_public_encrypt and stores the result into
 * decrypted.
 *
 * You can use this function e.g. to decrypt data which is supposed to only be available to you.
 *
 * @param string $data
 * @param string $decrypted
 * @param string|resource|array $key key must be the private key corresponding that
 * was used to encrypt the data.
 * @param int $padding padding can be one of
 * OPENSSL_PKCS1_PADDING,
 * OPENSSL_SSLV23_PADDING,
 * OPENSSL_PKCS1_OAEP_PADDING,
 * OPENSSL_NO_PADDING.
 * @throws OpensslException
 *
 */
function openssl_private_decrypt(string $data, string &$decrypted, $key, int $padding = OPENSSL_PKCS1_PADDING): void
{
    error_clear_last();
    $result = \openssl_private_decrypt($data, $decrypted, $key, $padding);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_private_encrypt encrypts data
 * with private key and stores the result into
 * crypted. Encrypted data can be decrypted via
 * openssl_public_decrypt.
 *
 * This function can be used e.g. to sign data (or its hash) to prove that it
 * is not written by someone else.
 *
 * @param string $data
 * @param string $crypted
 * @param string|resource|array $key
 * @param int $padding padding can be one of
 * OPENSSL_PKCS1_PADDING,
 * OPENSSL_NO_PADDING.
 * @throws OpensslException
 *
 */
function openssl_private_encrypt(string $data, string &$crypted, $key, int $padding = OPENSSL_PKCS1_PADDING): void
{
    error_clear_last();
    $result = \openssl_private_encrypt($data, $crypted, $key, $padding);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_public_decrypt decrypts
 * data that was previous encrypted via
 * openssl_private_encrypt and stores the result into
 * decrypted.
 *
 * You can use this function e.g. to check if the message was written by the
 * owner of the private key.
 *
 * @param string $data
 * @param string $decrypted
 * @param string|resource $key key must be the public key corresponding that
 * was used to encrypt the data.
 * @param int $padding padding can be one of
 * OPENSSL_PKCS1_PADDING,
 * OPENSSL_NO_PADDING.
 * @throws OpensslException
 *
 */
function openssl_public_decrypt(string $data, string &$decrypted, $key, int $padding = OPENSSL_PKCS1_PADDING): void
{
    error_clear_last();
    $result = \openssl_public_decrypt($data, $decrypted, $key, $padding);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_public_encrypt encrypts data
 * with public key and stores the result into
 * crypted. Encrypted data can be decrypted via
 * openssl_private_decrypt.
 *
 * This function can be used e.g. to encrypt message which can be then read
 * only by owner of the private key. It can be also used to store secure data
 * in database.
 *
 * @param string $data
 * @param string $crypted This will hold the result of the encryption.
 * @param string|resource $key The public key.
 * @param int $padding padding can be one of
 * OPENSSL_PKCS1_PADDING,
 * OPENSSL_SSLV23_PADDING,
 * OPENSSL_PKCS1_OAEP_PADDING,
 * OPENSSL_NO_PADDING.
 * @throws OpensslException
 *
 */
function openssl_public_encrypt(string $data, string &$crypted, $key, int $padding = OPENSSL_PKCS1_PADDING): void
{
    error_clear_last();
    $result = \openssl_public_encrypt($data, $crypted, $key, $padding);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * Generates a string of pseudo-random bytes, with the number of bytes
 * determined by the length parameter.
 *
 * It also indicates if a cryptographically strong algorithm was used to produce the
 * pseudo-random bytes, and does this via the optional crypto_strong
 * parameter. It's rare for this to be FALSE, but some systems may be broken or old.
 *
 * @param int $length The length of the desired string of bytes. Must be a positive integer. PHP will
 * try to cast this parameter to a non-null integer to use it.
 * @param bool $crypto_strong If passed into the function, this will hold a boolean value that determines
 * if the algorithm used was "cryptographically strong", e.g., safe for usage with GPG,
 * passwords, etc. TRUE if it did, otherwise FALSE
 * @return string Returns the generated string of bytes on success,  .
 * @throws OpensslException
 *
 */
function openssl_random_pseudo_bytes(int $length, bool &$crypto_strong = null): string
{
    error_clear_last();
    if ($crypto_strong !== null) {
        $result = \openssl_random_pseudo_bytes($length, $crypto_strong);
    } else {
        $result = \openssl_random_pseudo_bytes($length);
    }
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
    return $result;
}


/**
 * openssl_seal seals (encrypts)
 * data by using the given method with a randomly generated
 * secret key. The key is encrypted with each of the public keys
 * associated with the identifiers in pub_key_ids
 * and each encrypted key is returned
 * in env_keys. This means that one can send
 * sealed data to multiple recipients (provided one has obtained their
 * public keys). Each recipient must receive both the sealed data and
 * the envelope key that was encrypted with the recipient's public key.
 *
 * @param string $data The data to seal.
 * @param string $sealed_data The sealed data.
 * @param array $env_keys Array of encrypted keys.
 * @param array $pub_key_ids Array of public key resource identifiers.
 * @param string $method The cipher method.
 * @param string $iv The initialization vector.
 * @return int Returns the length of the sealed data on success, .
 * If successful the sealed data is returned in
 * sealed_data, and the envelope keys in
 * env_keys.
 * @throws OpensslException
 *
 */
function openssl_seal(string $data, string &$sealed_data, array &$env_keys, array $pub_key_ids, string $method = "RC4", string &$iv = null): int
{
    error_clear_last();
    if ($iv !== null) {
        $result = \openssl_seal($data, $sealed_data, $env_keys, $pub_key_ids, $method, $iv);
    } else {
        $result = \openssl_seal($data, $sealed_data, $env_keys, $pub_key_ids, $method);
    }
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
    return $result;
}


/**
 * openssl_sign computes a signature for the
 * specified data by generating a cryptographic
 * digital signature using the private key associated with
 * priv_key_id. Note that the data itself is
 * not encrypted.
 *
 * @param string $data The string of data you wish to sign
 * @param string $signature If the call was successful the signature is returned in
 * signature.
 * @param resource|string $priv_key_id resource - a key, returned by openssl_get_privatekey
 *
 * string - a PEM formatted key
 * @param int|string $signature_alg int - one of these Signature Algorithms.
 *
 * string - a valid string returned by openssl_get_md_methods example, "sha256WithRSAEncryption" or "sha384".
 * @throws OpensslException
 *
 */
function openssl_sign(string $data, string &$signature, $priv_key_id, $signature_alg = OPENSSL_ALGO_SHA1): void
{
    error_clear_last();
    $result = \openssl_sign($data, $signature, $priv_key_id, $signature_alg);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_x509_export_to_file stores
 * x509 into a file named by
 * outfilename in a PEM encoded format.
 *
 * @param string|resource $x509 See Key/Certificate parameters for a list of valid values.
 * @param string $outfilename Path to the output file.
 * @param bool $notext
 * The optional parameter notext affects
 * the verbosity of the output; if it is FALSE, then additional human-readable
 * information is included in the output. The default value of
 * notext is TRUE.
 * @throws OpensslException
 *
 */
function openssl_x509_export_to_file($x509, string $outfilename, bool $notext = true): void
{
    error_clear_last();
    $result = \openssl_x509_export_to_file($x509, $outfilename, $notext);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_x509_export stores
 * x509 into a string named by
 * output in a PEM encoded format.
 *
 * @param string|resource $x509 See Key/Certificate parameters for a list of valid values.
 * @param string $output On success, this will hold the PEM.
 * @param bool $notext
 * The optional parameter notext affects
 * the verbosity of the output; if it is FALSE, then additional human-readable
 * information is included in the output. The default value of
 * notext is TRUE.
 * @throws OpensslException
 *
 */
function openssl_x509_export($x509, string &$output, bool $notext = true): void
{
    error_clear_last();
    $result = \openssl_x509_export($x509, $output, $notext);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_x509_read parses the certificate supplied by
 * x509certdata and returns a resource identifier for
 * it.
 *
 * @param string|resource $x509certdata X509 certificate. See Key/Certificate parameters for a list of valid values.
 * @return resource Returns a resource identifier on success .
 * @throws OpensslException
 *
 */
function openssl_x509_read($x509certdata)
{
    error_clear_last();
    $result = \openssl_x509_read($x509certdata);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
    return $result;
}
