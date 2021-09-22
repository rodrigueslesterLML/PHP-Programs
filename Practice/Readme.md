# PHP Syntax

1. PHP Script can be placed anywhere in the  document
2. Start: <?php End: ?> Extension : .php
3. Statements end with ;
4. Keywords, classes, fucntions , user defined functions not case sensitive
5. Variables are case sensitive
6. Comments: Single line --> # or // | Multiline: /* */

```markdown
# Variables

1. It is created when you assign value to it
2. Variable syntax: $variablename = value;
3. A variable name must start with a letter or the underscorecharacter and not number and  can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
4. **Output Variable**: echo.
5. PHP is a Loosely typed language . However  we can specify strict / non strict as per type matching requirement.
```

## Variable Scope:
1. declared outside a function --> GLOBAL SCOPE--> accessed outside a function.
2. declared within a function --> LOCAL SCOPE --> accessed within that function. **Note** Thus You can have local variables with the same name in different functions
3. The global keyword is used to access a global variable from within a function.
4. PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
5.  sometimes we want a local variable NOT to be deleted. We need it for a further job. To do this, use the static keyword when you first declare the variable. Then, each time the function is called, that variable will still have the information it contained from the last time the function was called