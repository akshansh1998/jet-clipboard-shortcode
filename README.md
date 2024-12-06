Description
-----------

Adds shortcode `[jet_clipboard]` to copy selected content into the clipboard buffer with improved functionality for plain-text copying.

Args
----

-   **copy_text**: String to copy into the buffer.
-   **label**: Label for the copy link.
-   **icon**: Copy icon. Accepts `1` or `0`. Default: `1`.

Instructions
------------

1.  Install and activate the plugin.
2.  Use the shortcode in your editor with the desired arguments:
    -   `[jet_clipboard copy_text="Hello, World!" label="Copy Text" icon="1"]`
3.  For Elementor/Block editors:
    -   Use the Dynamic Field widget.
    -   Set *Do Shortcodes* in the *Callback* option.
    -   In *Customize field output*, enter the shortcode.

Changelog
---------

### Version 1.1 (Updated Fork)

-   Enhanced clipboard handling to remove HTML tags while preserving formatting like line breaks.
-   Preserved original functionality, including the "copied" class feedback mechanism.
-   Improved error handling for undefined or empty content.

### Version 1.0

-   Initial release with basic shortcode functionality.
