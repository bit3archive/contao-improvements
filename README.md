# Contao improvements

Collection of small improvements for contao.

- Allow HTML in headlines of content elements, news and calendar events.
- Allow long urls in content elements url fields. (normaly urls are limited to 255 characters)
- Rename articles of the same title as the page, if the page is renamed.
- Auto-Select the first text, checkbox, radio or select field in backend, if the edit mask is opened. (Improve speed of mass creating fields with keyboard shortcuts)
- Add insert tag `{{page::*}}` to access **every** field of the $objPage object.
- Add a lot of wrapper instert tags, for example `{{base64_encode::*}}`, see description below.

## Wrapper insert tag

The wrapper insert tag is a flexible wrapper for other insert tags. The main syntax is `{{<function>::<other insert tag>}}`.
`<function>` is a string expecting function, currenty supported is:

- base64\_encode
- base64\_decode
- rawurldecode
- rawurlencode
- urldecode
- urlencode
- crc32
- crypt
- html\_entity\_decode
- htmlentities
- htmlspecialchars\_decode
- htmlspecialchars
- lcfirst
- ltrim
- md5
- nl2br
- ord
- quoted\_printable\_decode
- quoted\_printable\_encode
- quotemeta
- rtrim
- sha1
- soundex
- str\_rot13
- str\_shuffle
- str\_split
- str\_word\_count
- strip\_tags
- stripcslashes
- stripslashes
- strlen
- strrev
- strtolower
- strtoupper
- trim
- ucfirst
- ucwords
- wordwrap
- standardize

`<other istert tag>` can be every other insert tag, including the wrapper insert tag itself (see Recursive example).

### Example

> `{{urlencode::env::url}}`

### Recursive example

> {{htmlentities::htmlspecialchars::insert\_article::123}}

### Embedded example

> `<a href="{{link_url::123}}" rel="{{htmlspecialchars::strip_tags::insert_content::456}}">read more...</a>`

### Extending with custom wrapper functions

Everyone can extend the wrapper insert tag by adding a custom function to `$GLOBALS['TL_INSERTTAG_WRAPPER']`.

> `$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'customFunction';`

The wrapper can only pass one parameter to the function, the result of the wrapped insert tag.

