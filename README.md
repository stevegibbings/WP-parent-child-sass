# WP-parent-child-sass

Test to see if child theme scss can inherit parent scss but with child specific sass variables that can override parent variables.

Child style.scss is built in the child theme so not the usual way in WP where a child would have it's own css that overrode css from the separately linked css file.

The parent and child themes need to be built first.

In /fabric

```javascript
    npm install && gulp styles-dev
```