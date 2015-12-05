<!DOCTYPE html >
<html>
<head>
<title> Introl to XLST </title>
<link href="/public/tutorial-style.css" media="all" rel="stylesheet" >
</head>
<body>
<h1> MWins </h1>
<hr>


<h2 id="what-is-xslt">What is XSLT ?</h2>
<p>Extensible Stylesheet Language Transformations. XSLT is used to transform or process XML documents into other formats including XML,HTML. It is based on XML and uses XPath. It’s a rule based and tag based programming language. It requires one or more XML files and an XSLT stylesheet to generate an new document. The original documents are not modified by XSLT processing.</p>
<h3 id="what-can-it-do">What can it do ?</h3>
<p>XSLT can provide a layer of abstraction for XML data source files. Using XML documents, it can render multiple output formats from a single source. It is not limited to XML and HTML. It can produce XSL-FO (Extensible Stylesheet Language - Formatting Objects) which is used to generate PDFs. Any text based format can be generated from XML documents with XSLT.</p>
<h3 id="where-can-it-be-used">Where can it be used?</h3>
<p>Most programming languges have a library (libxslt) which makes XSLT functionality available. Most browsers support it by linking XSL stylesheets into an XML document. <strong>Note that github pages allows XML/XSL and modern browsers will render the documents.</strong> This provides a simple mechanism for templating on github pages.</p>
<h2 id="what-is-it-status">What is it status?</h2>
<p>XSLT , while it has support from modern browsers and most programming langugages, it has never taken hold of the web templating sector. It is used by various applications such as Documentation and Book generation (PHPDoc uses XSL and DocBook while not directly dependent on XSLT , XSLT is used to generate actual content). It can be used to do on the fly transformations for web based documents. There isn’t a high demand for XSLT but it is an interesting tool which can be useful for web developers.</p>
<h3 id="practical-uses">Practical Uses</h3>
<p>Use to generate multiple formats for a website. For example, if a website is offered as a single page or ‘chunked’ html, XSLT can be used to build both files from source files.</p>
<p>Can be used to generate reports from existing XML documents. Invoices for example, could be generated from source files.</p>
<p>Web developers could store information about a website in XML and use XSLT to transform those source files into a site independent of the design. A limited example would be storing links for navigation in XML files and using XSLT to generate HTML code to display the navigation. When the site was to be upgraded, it would only require writing a new XSLT file to generate the new HTML.</p>
<p>Could also be used to generate forms for web.</p>
<h3 id="other-xslt-posts">Other XSLT posts ?</h3>
<ul>
<li><a href="https://www.reddit.com/r/web_dev_help/comments/3vhos1/basics_of_xslt/">Basic structure of XSLT documents</a></li>

<li><a href="https://www.reddit.com/r/web_dev_help/comments/3vhoph/using_xslt_to_generate_an_invoice/">How to display an invoice from XML sources</a></li>
<li>[Generate a SVG from XML data] (https://www.reddit.com/r/web_dev_help/comments/3vhohi/using_xslt_to_generate_a_svg/)</li>
</ul>

</body>
</html>
