This extension disables modules for EVERY (even admin) user with special TSconfig configuration.

Example:

To disable the help module just add this TSconfig to the backend user or group:
-------------------------------------------------------
# disable help module
tx_modulecleaner.disable = help_cshmanual, help_aboutmodules, help_about, help
-------------------------------------------------------

Make sure you change the startpage of the backend or the user will get an error message.

