..  include:: /Includes.rst.txt
..  index:: ! Debugging
..  _examples-debug:

=========
Debugging
=========

Let's take a look at what debugging possibilities TYPO3 provides.

..  todo: Revise this chapter, for example:
          - Debugging PHP code should be done with an IDE and Xdebug
          - Add Extbase's DebuggerUtility::var_dump()
          - Add Fluid's f:debug ViewHelper
          - Add Configuration backend module for TCA, Middlewares, Events, etc.
          - Add TypoScript module for an overview of parsed TypoScript

..  index::
    pair: Debugging; PHP
    GlobalDebugFunctions
    DebugUtility
    TYPO3_CONF_VARS; SYS devIPmask

Debugging PHP code
==================

The TYPO3 Core provides a simple :php:`debug()` (defined in
:file:`EXT:core/Classes/Core/GlobalDebugFunctions.php`). It wraps around
:php:`\TYPO3\CMS\Core\Utility\DebugUtility::debug()` and will output debug
information only if it matches a set of IP addresses (defined in
:ref:`$GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] <typo3ConfVars_sys_devIPmask>`).

For example, the following code:

..  include:: /CodeSnippets/Debugging/DebugCookies.rst.txt

will produce such an output:

..  include:: /Images/AutomaticScreenshots/Examples/Debugging/DebugOutput.rst.txt

In general, look at class :php:`\TYPO3\CMS\Core\Utility\DebugUtility` for useful
debugging tools.

..  index::
    pair: Debugging; Backend
    TYPO3_CONF_VARS; BE debug

Backend debug mode
==================

To display additional debug information in the backend, set
:ref:`$GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] <typo3ConfVars_be_debug>`
in :file:`config/system/settings.php` and log in with an administrator
account.

It shows for example the names of fields and in case of select, radio and
checkbox fields the values in addition, which are generated by the
:ref:`FormEngine <FormEngine>`. These can be used to set access permissions or
configuration using :ref:`TSconfig <t3tsconfig:start>`.

If :doc:`EXT:lowlevel <ext_lowlevel:Index>` is installed, the name of the
database table or field is appended to the select options in the
:guilabel:`System > DB Check > Full Search` module.

Additionally, in debug mode, the page renderer does not compress or concatenate
JavaScript or CSS resources.
