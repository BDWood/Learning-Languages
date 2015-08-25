#jQuery and it's competitors.

jQuery, YUI(Yahoo User Interface)<-(discontinued by Yahoo), Prototype(obsolete), DOJO(still around, not as popular as jQuery)


IIFE
Immediately Invoking Function Expressions
```js

(function($, //passing something in here allows you to keep things set in this scope) {
   //This is a safety method

   $(function (){
        //This is jQuery
   });

})(jQuery);

```