php-plesk
============

Introduction
------------

This package contains a PHP client for the Plesk RPC API.

The following features are currently supported:

*   List IP addresses
*   List service plans
*   Get server information and stats
*   List/add/update/delete clients
*   List/add/update/delete subscriptions
*   List/add/update/delete sites
*   List/add/update/delete email addresses
*   List/add/update/delete domain aliases
*   List/add/update/delete subdomains
*   List database servers
*   List/add/delete databases
*   Add database users
*   Email dev.pmill@gmail.com with requests for exposing further functionality

Requirements
------------

This library package requires PHP 5.3 or later and Plesk 9.5 or above.


Usage
-----

The following example shows how to retrieve the list of websites available for the 
supplied user.

    $config = array(
        'host'=>'example.com',
        'username'=>'username',
        'password'=>'password',
    );
    
    $request = new \pmill\Plesk\ListClients($config);
    $info = $request->process();

Further examples are available in the examples directory.

Version History
---------------

Unversioned (13 Apr 2013)

*   First public release of php-plesk.

0.1.0 (08/10/2014)

*   Updated Create Email Address xml payload for newer versions of the Plesk API
*   Exposed further functionality

0.2.0 (09/10/2014)

*   Added support for composer installs
*   Updated code for psr-0 autoloading
*   Updated code for psr-1 basic coding standard
*   Updated code for psr-2 coding style guide

0.3.0 (16/10/2014)

*   Added functionality for ip addresses, service plans, clients, subscriptions and server information 
*   Added test script
*   Updated classes to throw exceptions when requests fail
*   Sorted examples folder into areas of functionality

0.4.0 (05/02/2015)

*   Added functionality for databases 
*   Updated test script

Copyright and License
---------------------

php-plesk
Copyright (c) 2013 pmill (dev.pmill@gmail.com) 
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are
met:

*   Redistributions of source code must retain the above copyright 
    notice, this list of conditions and the following disclaimer.

*   Redistributions in binary form must reproduce the above copyright
    notice, this list of conditions and the following disclaimer in the
    documentation and/or other materials provided with the 
    distribution.

This software is provided by the copyright holders and contributors "as
is" and any express or implied warranties, including, but not limited
to, the implied warranties of merchantability and fitness for a
particular purpose are disclaimed. In no event shall the copyright owner
or contributors be liable for any direct, indirect, incidental, special,
exemplary, or consequential damages (including, but not limited to,
procurement of substitute goods or services; loss of use, data, or
profits; or business interruption) however caused and on any theory of
liability, whether in contract, strict liability, or tort (including
negligence or otherwise) arising in any way out of the use of this
software, even if advised of the possibility of such damage.
