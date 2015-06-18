# How to work with this repository #

## Basic Rule ##
**Trunk** must be <u><b>stable always/everytime</b></u>! This is only one thing, which I demand/desire.

## Simple commits ##
If you want change/repair/etc. some code in the trunk and you know that this changes doesn't affect/impact the trunk stability, you can simply commit this changes into the trunk.

## Complex commits ##
But if you know, that you will need more commits, so you have to create new [Feature Branch](http://svnbook.red-bean.com/en/1.1/ch04s04.html#svn-ch-4-sect-4.4.2) as is described in the Subversion book.<br>
So everytime you want to implement or work on the new component, you must create new <a href='http://svnbook.red-bean.com/en/1.1/ch04s04.html#svn-ch-4-sect-4.4.2'>Feature Branch</a>.<br>
E.g. you want to work on the new component e.g. dijit.Dialog, pls create new <a href='http://svnbook.red-bean.com/en/1.1/ch04s04.html#svn-ch-4-sect-4.4.2'>Feature Branch</a> <u>^/branches/dijit.Dialog/</u> and when you are done, reintegrate it into the trunk.<br>
<br>
Thank you for your compliance with this requirement.