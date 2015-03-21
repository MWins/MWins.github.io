<?php 
include 'start.php';
?><!DOCTYPE html >
<html>
  <head>
  <meta charset="utf-8"> 
    <meta name="generator" content=" ">
    <title></title>  
	<link href="resources/style.css" media="all" type="text/css" rel="stylesheet" />    <link href="resources/spd_style.css" media="all" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	
	<style>
	
	
	.panel	{ width: 97%;}
.container	{	width: 90%; margin: 0 auto; 	 font-family: sans-serif; }
.sequence	{	margin: 0 0; 	overflow:hidden; display: block; text-align:center;border-bottom: rgba(255,255,255,.3) 1px solid;}
.sequence	.cell { width: 15%; margin: 0 auto; float:left; overflow:hidden; display: block; }
p.cell	{	 padding: 5px 3px; border-right: rgba(255,255,255,.3) 1px solid; min-height: 60px; 	font-size: 1.15em;	} 
li.cell	{	font-weight: bold;	border-right: rgba(255,255,255,.3) 1px solid;	padding: 5px 3px;	}

section	{	margin-left: 1em; padding: 0px; width: 95%; border: rgba(255,255,255,.3) 1px solid; margin-top: .5em;}
section ul	{ list-style:none;	padding: 0px 3px;	}
section ul li	{ padding:  3px 0px  0px 0px;	}

.sequence	.card { width: 22.41%; margin: 6px; float:left; overflow:hidden; display: block;  
min-height: 330px; text-align:left;border: rgba(255,255,255,.3) 1px solid;
}

.card h4	{	
border-bottom: rgba(255,255,255,.3) 1px solid;
}

h1	{	font-size: 2.3em; margin-bottom: 9px;	}
</style>
  </head>
  <body>

<div class=" panel preview" >
<h1>Project Lifecycle</h1>
<h2 class="panel_focal">The project lifecycle consists of the following sections</h2>
<ul class="sequence">
<li class="cell">Proposal/Discovery</li>
<li class="cell">Planning</li>
<li class="cell">Design</li>
<li class="cell">Development</li>
<li class="cell">Testing</li>
<li class="cell">Deployment</li>
</ul>
<div class="sequence">
<p class="cell">The Proposal uses estimates to provide a cost expectation. </p>
<p class="cell">Planning provides a roadmap for the work to be completed. </p>
<p class="cell">Design covers creation of any necessary graphic work for the project.</p>
<p class="cell">Development is building of the system which powers the project.</p>
<p class="cell">Deployment covers setting up the project on the WWW.</p>
<p class="cell">Testing covers browser and backend testing. </p>
</div>
<section>
<h2>Discovery</h2>
<div class="sequence">
<div class="card">
<h4>Executive Summary</h4>
<ul>
<li>Due date</li>
<li>Contact Info, Emails</li>
<li># of phases</li>
<li>Deliverables</li>
<li>Client deliverables + Due Dates</li>
<li>Project summary</li>
</ul>
</div>
<div class="card">
<h4>Content Pages</h4>
<ul>
<li>Total number of pages (guess)</li>
<li>How many page types (archetypes)</li>
<li>What content is needed and who will deliver by when?</li>
<li>Include Commerce emails (order,tracking,etc) and new user welcome email (branding should cover this as well)</li>
<li>Will Press Releases be distributed through the website? </li>
<li>Will News be posted to the site?</li>
<li>Does it need a blog? Both of the above count as a blog.</li>
</ul>
</div>
<div class="card">
<h4>Media Requirements</h4>
<ul>
<li>image galleries</li>
<li>media management</li>
<li>video usage level ?</li>
</ul>
</div>
<div class="card">
<h4>Hosting</h4>
<ul>
<li>OS : Linux/FreeBSD/Windows</li>
<li>webserver : apache/nginx/iis</li>
<li>server side language : php/aspx/ruby/</li>
<li>front end framework : foundations/bootstrap</li>
<li>javascript library : jQuery</li>
<li>Database : MySQL </li>
<li>Email  accounts</li>
<li>Image server:</li>
<li>CMS/Scripts </li>
<li>Multiple servers / Scalable Architecture </li>
<li>Domain Registration</li>
<li>DNS Hosting</li>
</ul>
</div>

<div class="card">
<h4>Traffic</h4>
<ul>
<li>averages per hour/day/week/month</li>
<li>peak usage  per hour/day/week/month</li>
<li># of concurrent users</li>
<li>projected storage space per user :  &lt; 10MB , &gt;10MB </li>
<li>frequency/volume of email</li>
<li>budgeted for hosting per quarter?</li>
<li>Need a CDN?</li>
</ul>
</div>

<div class="card">
<h4>Design :</h4>
<ul>
<li>Will there be a need for specialty content like pricing tables ?</li>
<li>How many sales landing pages will be needed (frontpage counts as one)?</li>
<li>Number of expected revisions. </li>
<li>Color Palette</li>
<li>Mobile optimized or Responsive Template ?</li>
<li>Is mobile a concern or not?</li>
<li>UI Effects Front end (AJAX submissions, Transitions etc)</li>
<li>Stock Art or other media purchases</li>
</ul>
</div>

<div class="card">
<h4>Marketing/SEO</h4>
<ul>
<li>site/url structure optimized for search engines</li>
<li>inbound link building is outside scope </li>
<li>SEFU for above</li>
<li>Need the ability to deliver and track Promotions within the site?</li>
<li>Sitemaps </li>
<li>Social media, who creates accounts? Provide setup and monitoring?</li>
<li>micro formats. If needed</li>
<li>What analytical tracking will be needed ?</li>
<li>Is GA good enough?</li>
<li>Will A/B or multivariate testing be employed?</li>
</ul>
</div>

<div class="card">
<h4>Customer Service will be handled how?</h4>
<ul>
<li>Email addresses for support,sales,staff</li>
<li>What documentation will be web based ?</li>
<li>How are support issues resolved? Does it require a web component? ie support chat, ticketing system, etc.</li>
</ul>
</div>

<div class="card">
<h4>Commerce</h4>
<ul>
<li>What level of security is required ?</li>
<li>What payment processors/gateways will be utilized?</li>
<li>SSL is assumed for all commerce.</li>
<li>How will accessories be handled?</li>
<li>Will discounts be required?</li>
<li>Handling of bundles/term discounts etc.</li>
<li>Total # of products.</li>
<li>recurring billing (membership sites)</li>
</ul>
</div>

<div class="card">
<h4>Backup Plan</h4>
<ul>
<li>Frequency of backups laid out including potential costs for storage.</li>
<li>The actual plan to restore which must be tested for the backups to be effective.</li>
<li>If off-site storage is required. </li>
</ul>
</div>

<div class="card">
<h4>Other</h4>
<ul>
<li>Any additional 3rd party APIs which have to be integrated into the system?</li>
<li>Automated actions (importing/exporting/transmitting files)</li>
<li>Integration with existing accounting solutions.</li>
<li>Required levels of Reporting</li>
<li>Forms submitted by users/clients/customers outside of the commerce scope</li>
<li>Mailing list management, email capture and schedule for email newsletter or promotions.</li>
<li>Application Requirements</li>
</ul>
</div>
</div>
</section>
<section>
<h2>Planning</h2>
<div class="sequence">
<div class="card">
<h4>Design Phase 1</h4>
<ul>
<li>template archetypes needed</li>
<li>mockups</li>
<li>wireframes</li>
<li>initial draft (comp ?)</li>
<li>approved design</li>
<li>any additional designs (adverts,promotions tied to this design)</li>
<li>Document Design Elements </li>
</ul>
<h4>Design Phase 1 Goal</h4>
<ul>
<li>Produce Layouts</li>
<li>Get approved Comps.</li>
</ul>
</div>
<div class="card">
<h4>Development Phase 1</h4>
<ul>
<li>database model</li>
<li>RDBMS or EAV</li>
<li>user sub-system</li>
<li>Application Requirements</li>
<li>Platform setup</li>
<li>Framework if required setup</li>
<li>API (should be applicable)</li>
<li>Write API </li>
<li>test API</li>
</ul>

<h4>BACKEND Phase 1 Goal</h4>

<ul>
<li>Routing requirements</li>
<li>initial data model</li>
</ul>




</div>
<div class="card">
<h4>Frontend Development Phase 1</h4>
<ul>
<li>select frameworks </li>
<li>determine URL structure</li>
<li>build default page template (hdr/ftr-content)</li>
<li>build each page archetype </li>
<li>template </li>
<li>test (browsers())</li>
<li>Any Advanced UI ? consult() : skip;</li>
<li>Build JS API reader</li>
</ul>

<h4>FRONT END Phase 1 Goal</h4>

<ul>
<li>Structure only site</li>
</ul>





</div>
<div class="card">
<h4>Copywriting</h4>
<ul>
<li>like we have a copywriter</li>
</ul>
</div>


</div>
</section>


<section>
<h2>Phases </h2>
<div class="sequence">
<div class="card">
<h4>DESIGN Phase 1</h4>
<p>Sketch out the Site Structure. Map out the flow of the </p>
<ul>
<li>pages &gt;</li>
<li>home &gt; About </li>
<li>home&gt; Products</li>
</ul>
<p>Include category views and item detail views. Any forms which are public facing should be highlighted (put on a list). Forms which are restricted to specific users should be marked as well. Put that into the design folder and start working on a visual comp to present to the client. </p>
</div>
<div class="card">
<h4>FRONT END Phase 1</h4>
<ul>
<li>Setup DEV with frameworks. </li>
<li>Create a default frontpage for the project</li>
 <li>. Build up sample data as placeholders (if you need chart data, tabular data, lists, whatever).</li>
 <li>If you are using a Template Engine, add it. Same for an autoloader. </li>
<li>Determine URL structure for project site. If mod_rewrite is needed or not. </li>
 <li>Create barebones of site from Layouts (provided by Design).</li>
 </ul>
</div>
<div class="card">
<h4>BACKEND Phase 1</h4>
<ul>
<li>Backend will provide Routing Information. </li>
<li>Determine application requirements. Wireframe forms will be provided from design. </li>
<li>Develop data model. Setup API framework , endpoint and testing protocol. </li>
</ul>


</div>
<div class="card">
<h4>Client Delivery Phase 1</h4>
<p>Client is provided with the design Comps, with selection being required for next phase (and payment milestone meet).</p>
</div>
</div>
</section>
<section>
<h2>Phase 2 </h2>
<div class="sequence">
<div class="card">
<h4>DESIGN Phase 2 Goal</h4>
<ul>
<li>Produce Comps for all required pages. </li>
</ul>
</div>
<div class="card">
<h4>FRONT END Phase 2 Goal</h4>
<ul>
<li>Convert Comps to pages.</li>
<li>establish AJAX client for API contact</li>
</ul>
</div>
<div class="card">
<h4>BACKEND Phase 2 Goal</h4>
<ul>
<li>Build API Server</li>
</ul>
</div>
<div class="card">
<h4>Client Delivery Phase 2</h4>
<p>End of phase 2 present the Alpha version of the site. </p>
</div>
</section>
<section>
<h2>Phase 3 </h2>
<div class="sequence">
<div class="card">
<h4>DESIGN Phase 3 Goal</h4>
<ul>
<li>Receive Client Feedback </li>
<li>Provide Final Revisions</li>
<li>Browser Test Front End site</li>
</ul>
</div>
<div class="card">
<h4>FRONT END Phase 3 Goal</h4>
<ul>
<li>Complete API integration </li>
</ul>
</div>
<div class="card">
<h4>BACKEND Phase 3 Goal</h4>
<ul>
<li>Test API Server</li>
<li>Build  LIVE server environment </li>
</ul>
</div>
<div class="card">
<h4>Client Delivery Phase 3</h4>
<ul>
<li>Beta Level - ready for testing</li>
</ul>
</div>
</section>

<section>
<h2>Misc </h2>
<div class="sequence">
<div class="card">
<h4>Missing Stuff</h4>
<ul>
<li>Documentation</li>
<li>Help Files</li>
<li>Source Code Management</li>
<li>Specific requirement details ( like performance or system logging)</li>
</ul>
</div>
</div>
</section>
