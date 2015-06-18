# Zend Framework components for the DOJO toolkit #

I have created this project at **Google Code**, because I hope that it speed up development and support of the [Dojo Toolkit Framework](http://dojotoolkit.org/) in [Zend Framework](http://framework.zend.com/) and I hope that this proposal [Zend\_Dojo – Extended Dijit Support Component Proposal](http://framework.zend.com/wiki/display/ZFPROP/Zend_Dojo+-+Extended+Dijit+Support+-+Matthew+Weier+O'Phinney) will be implemented faster.

## Philosophy of my commits ##
I don't develop this proposal actively. I'm developing new components from this proposal only when I need their in my applications, so when I need support e.g. for the dijit.Tooltip in my applications, I implement this component and I want to share my code with whole community, so I commit this new component to this repository.<br>
I want to thank everyone who shares this philosophy with me and share him code, so the entire community has access to new Dojo components.<br>
<br>
<h2>How can you help</h2>
<font color='red'>I want to ask everybody, who have developed/implemented some components from this proposal to contact me and I give him commit rights, so everybody can help implement this proposal faster, thank you.</font>

<h2>How to install demo application from repository</h2>

<ol><li>Checkout<br>
</li><li>Download Dojo Toolkit release <a href='http://download.dojotoolkit.org/release-1.4.2/dojo-release-1.4.2.tar.gz'>http://download.dojotoolkit.org/release-1.4.2/dojo-release-1.4.2.tar.gz</a> and copy dojo-release-1.4.2 to htdocs/zf-dojo/js/dojo/<br>
</li><li>Download Zend Framework release <a href='http://framework.zend.com/releases/ZendFramework-1.10.3/ZendFramework-1.10.3-minimal.tar.gz'>http://framework.zend.com/releases/ZendFramework-1.10.3/ZendFramework-1.10.3-minimal.tar.gz</a> and copy Zend to htdocs/zf-dojo/library/<br>
</li><li>Setup virtualhost with document_root to htdocs/<br>
</li><li>Change option viewBaseHref in application.ini for your host</li></ol>


<h2>How to work with this repository (commits)</h2>
If you have commit rights, read first this section on the wiki <a href='HowWorkWithRepository.md'>How to work with this repository</a>.<br>
<br>
<h2>Finished Components</h2>

Here are components, which are done:<br>
<ul><li><b>dijit.TitlePane</b> - Form Decorator and View Helper<br>
</li><li><b>dijit.Tooltip</b> - Form Decorator and View Helper<br>
</li><li><b>dijit.TooltipDialog</b> - Form Decorator and View Helper<br>
</li><li><b>dijit.form.Select</b> - Form Element and View Helper<br>
</li><li><b>dijit.Dialog</b> - Form Decorator and View Helper<br>
</li><li><b>dijit.ProgressBar</b> - View Helper<br>
</li><li><b>dijit.ColorPalette</b> - View Helper<br>
</li><li><b>dijit.form.DropDownButton</b> - Form Element and View Helper</li></ul>

<h2>Demo Page</h2>
Here you can find demo page, with components which are finished <a href='http://zf-dojo.crystal-studio.eu/'>http://zf-dojo.crystal-studio.eu/</a>.<br>
Here is the <b>DEMO Application</b> as <i>Google Project</i> - <a href='http://code.google.com/p/zf-dojo-demo-app/'>zf-dojo-demo-app</a>.<br>
<br>
<h2>Documentation</h2>
Documentation for every finished component is on the <a href='https://code.google.com/p/zf-dojo/w/list'>Wiki Pages</a>.<br>
The documentation is written so that it can be directly pasted into the <a href='http://framework.zend.com/manual/en/zend.dojo.html'>Zend Framework's Dojo Documentation</a>.<br>
<br>
Here are components, for which is documentation done:<br>
<ul><li><b>dijit.TitlePane</b> - Form Decorator and View Helper<br>
</li><li><b>dijit.Tooltip</b> - Form Decorator and View Helper<br>
</li><li><b>dijit.TooltipDialog</b> - Form Decorator and View Helper<br>
</li><li><b>dijit.form.Select</b> - Form Element and <a href='dijitformSelectViewHelper.md'>View Helper</a>
</li><li><b>dijit.Dialog</b> - Form Decorator and View Helper<br>
</li><li><b>dijit.ProgressBar</b> - View Helper<br>
</li><li><b>dijit.ColorPalette</b> - View Helper<br>
</li><li><b>dijit.form.DropDownButton</b> - Form Element and View Helper</li></ul>

<h2>Links</h2>
Here are links, which relate with this page:<br>
<ul><li><a href="http://framework.zend.com/wiki/display/ZFPROP/Zend_Dojo+-+Extended+Dijit+Support+-+Matthew+Weier+O'Phinney">Zend_Dojo - Extended Dijit Support</a> - Proposal for new <b>Dijit Components</b> which will be supported in some future version of <i>Zend Framework</i>
</li><li><a href='http://framework.zend.com/issues/browse/ZF-8137'>Issue ZF-8137</a>, <a href='http://framework.zend.com/issues/browse/ZF-8632'>Issue ZF-8632</a> - components for <b>dojo.form.Select</b>
</li><li><a href='http://framework.zend.com/issues/browse/ZF-8258'>Issue ZF-8258</a> - components for <b>dijit.TitlePane</b>