//document.write("<script type='text/javascript' src='//va-intranet.ecitizen.gov.sg/CFP/Script/Jquery/jquery.min.js' ></script>");
//document.write("<script type='text/javascript' src='//va-intranet.ecitizen.gov.sg/CFP/IntVA/ELD/js/custom_widget.js' ></script>");
//Virtual Assistant (Production)
document.write("<script type='text/javascript' src='//va.ecitizen.gov.sg/cfp/Script/Jquery/jquery.min.js' ></script>");
document.write("<script type='text/javascript' src='//va.ecitizen.gov.sg/cfp/va/eld/js/custom_widget.js' ></script>");


function buildMainMenu() {
    var m = "";
    m = m + "<!--start output from buildMainMenu()-->";
    m = m + "<ul>";

    //Voter Menu
    m = m + "<li>";
    m = m + "<a href='online.html'>VOTERS</a>";
    m = m + "<ul>";
    m = m + "<li>";
    m = m + "<a href='elections_safevoting.html'>Making Voting Safe</a>";
    m = m + "</li>";
    m = m + "<li><a href='online.html'>Voter Services</a></li>";
    m = m + "<li>";
    m = m + "<i></i>";
    m = m + "<a href='voter_education.html'>Voter Education</a>";
    m = m + "<ul>";
    m = m + "<li><a href='voters_firsttime.html'>First-Time Voters</a></li>";
    m = m + "<li><a href='voters_overseas.html'>Overseas Voters</a></li>";
    m = m + "<li><a href='voters_mobility.html'>Elderly and Voters with disabilities</a></li>";
    m = m + "<li><a href='voters_ballotsecrecy.html'>Ballot Secrecy</a></li>";
    m = m + "<li><a href='voters_dosdonts.html'>Do's & Don'ts of Voting</a></li>";
    m = m + "<li><a href='voters_commonterms.html'>Common Terms</a></li>";
    m = m + "<li><a href='voters_publication.html'>Publications</a></li>";
    m = m + "</ul>";
    m = m + "</li>";

    m = m + "<li>";
    m = m + "<i></i>";
    m = m + "<a href='voting_in_singapore.html'>Voting in Singapore</a>";
    m = m + "<ul>";
    m = m + "<li><a href='voters.html'>Who can vote?</a></li>";
    m = m + "<li><a href='voters_compulsory.html'>What should I do if I did not vote in a past election?</a></li>";
    m = m + "<li><a href='voters_how.html'>How to vote?</a></li>";
    m = m + "<li><a href='voters_pollcard.html'>Poll Card</a></li>";
    m = m + "</ul>";
    m = m + "</li>";

    m = m + "<li><a href='voters_forms.html'>Voter Forms</a></li>";
    m = m + "<li><a href='faq_voters.html'>Voter FAQs</a></li>";
    m = m + "</ul>";
    m = m + "</li>";

    //Candidate Menu
    m = m + "<li>";
    m = m + "<a href='candidate_presidential_online.html'>CANDIDATES</a>";
    m = m + "<ul>";
    m = m + "<li>";
    m = m + "<i></i>";
    m = m + "<a href='candidate_presidential_online.html'>Presidential Elections</a>";
    m = m + "<ul>";
    m = m + "<li><a href='candidate_presidential_online.html'>Candidate Services</a></li>";
    m = m + "<li><a href='candidate_presidential_qualify.html'>Qualifying Criteria</a></li>";
    m = m + "<li><a href='candidate_presidential_nominationprep.html'>Preparing for Nomination</a></li>";
    m = m + "<li><a href='candidate_presidential_nomination.html'>Nomination Day</a></li>";
    m = m + "<li><a href='candidate_presidential_campaign.html'>Campaigning</a></li>";
    m = m + "<li><a href='candidate_presidential_cooling.html'>Prohibited Activities on Cooling-off Day and Polling Day</a></li>";
    m = m + "<li><a href='candidate_presidential_polling.html'>Polling & Counting</a></li>";
    m = m + "<li><a href='candidate_presidential_postactivities.html'>Post-election Activities</a></li>";
    m = m + "<li><a href='candidate_presidential_handbook.html'>Candidate Handbook & Advisory</a></li>";
    m = m + "<li><a href='candidate_presidential_publication.html'>Publications</a></li>";
    m = m + "</ul>";
    m = m + "</li>";
    m = m + "<li>";
    m = m + "<i></i>";
    m = m + "<a href='candidate_parliamentary_online.html'>Parliamentary Elections</a>";
    m = m + "<ul>";
    m = m + "<li><a href='candidate_parliamentary_online.html'>Candidate Services</a></li>";
    m = m + "<li><a href='candidate_parliamentary_qualify.html'>Qualifying Criteria</a></li>";
    m = m + "<li><a href='candidate_parliamentary_nominationprep.html'>Preparing for Nomination</a></li>";
    m = m + "<li><a href='candidate_parliamentary_nomination.html'>Nomination Day</a></li>";
    m = m + "<li><a href='candidate_parliamentary_campaign.html'>Campaigning</a></li>";
    m = m + "<li><a href='candidate_parliamentary_cooling.html'>Prohibited Activities on Cooling-off Day and Polling Day</a></li>";
    m = m + "<li><a href='candidate_parliamentary_polling.html'>Polling & Counting</a></li>";
    m = m + "<li><a href='candidate_parliamentary_postactivities.html'>Post-election Activities</a></li>";
    m = m + "<li><a href='candidate_parliamentary_handbook.html'>Candidate Handbook & Advisory</a></li>";
    m = m + "<li><a href='candidate_parliamentary_publication.html'>Publications</a></li>";
    m = m + "</ul>";
    m = m + "</li>";
    m = m + "<li>";
    m = m + "<i></i>";
    m = m + "<a href='registry.html'>Political Donations</a>";
    m = m + "<ul>";
    m = m + "<li><a href='registry.html'>Overview of Political Donations Act</a></li>";
    m = m + "<li><a href='registry_donations_handbook.html'>Political Donations Handbook</a></li>";
    m = m + "<li><a href='registry_donations_forms.html'>Political Donations Forms</a></li>";
    m = m + "</ul>";
    m = m + "</li>";
    m = m + "<li>";
    m = m + "<i></i>";
    m = m + "<a href='resources_presidential.html'>Candidate Forms</a>";
    m = m + "<ul>";
    m = m + "<li><a href='resources_presidential.html'>Presidential Elections</a></li>";
    m = m + "<li><a href='resources_parliamentary.html'>Parliamentary Elections</a></li>";
    m = m + "</ul>";
    m = m + "</li>";
    m = m + "<li><a href='faq_candidates.html'>Candidate FAQs</a></li>";
    m = m + "</ul>";
    m = m + "</li>";

    //SG Elections Menu
    m = m + "<li id='menuElection'>";
    m = m + "<a href='elections.html'>ELECTIONS</a>"; //Elections
    m = m + "<ul>";
    m = m + "<li>";
    m = m + "<i></i>";
    m = m + "<a href='elections.html'>Registers of Electors</a>";
    m = m + "<ul>";
    m = m + "<li><a href='elections.html'>About Registers of Electors</a></li>";
    m = m + "<li><a href='elections_timeline.html'>Revision & Timeline</a></li>";
    m = m + "</ul>";
    m = m + "</li>";
    m = m + "<li><a href='elections_presidential.html' >Presidential Elections</a></li>";
    m = m + "<li><a href='elections_parliamentary.html'>Parliamentary Elections</a></li>";
    m = m + "<li><a href='elections_type_electoral.html'>Types of Electoral Divisions</a></li>";
    m = m + "<li>";
    m = m + "<i></i>";
    m = m + "<a href='elections_past_results.html'>Election Results</a>";
    m = m + "<ul>";
    m = m + "<li><a href='elections_past_results.html'>Presidential Election Results</a></li>";
    m = m + "<li><a href='elections_past_parliamentary.html'>Parliamentary General Election Results</a></li>";
    m = m + "<li><a href='elections_past_by.html'>Parliamentary By-Election Results</a></li>";
    m = m + "</ul>";
    m = m + "</li>";
    m = m + "<li><a href='legislation.html'>Legislation</a></li>";
    m = m + "<li>";
    m = m + "<i></i>";
    m = m + "<a href='elections_map_electoral.html'>Maps</a>";
    m = m + "<ul>";
    m = m + "<li><a href='elections_map_electoral.html'>Electoral Divisions</a></li>";
    m = m + "<li><a href='elections_map_pd.html'>Polling Districts</a></li>";
    m = m + "</ul>";
    m = m + "</li>";
    m = m + "<li><a href='faq_elections.html'>Election FAQs</a></li>";
    m = m + "</ul>";
    m = m + "</li>";

    //Who We Are Menu
    m = m + "<li id='menuWho'>";
    m = m + "<a href='our_role.html'>WHO WE ARE</a>"; //Who We Are
    m = m + "<ul>";
    m = m + "<li><a href='our_role.html'>Our Role</a></li>";
    m = m + "<li><a href='our_culture.html'>Our Culture</a></li>";
    m = m + "<li><a href='our_journey.html'>Our Journey</a></li>";
    m = m + "<li><a href='csr.html'>Corporate Social Responsibility</a></li>";
    m = m + "</ul>";
    m = m + "</li>";

    //Resources
    m = m + "<li>";
    m = m + "<a href='' onclick='return false' style='cursor:default'>RESOURCES</a>"; //Resources
    m = m + "<ul>";
    m = m + "<li><a href='media.html'>Press Releases</a></li>";
    m = m + "<li><a href='gazettes.html'>Gazettes</a></li>";
    m = m + "<li><a href='legislation.html'>Legislation</a></li>";
    m = m + "<li><a href='ebrc.html'>Reports of Electoral Boundaries Review Committee</a></li>";
    m = m + "<li>";
    m = m + "<i></i>";
    m = m + "<a href='candidate_presidential_publication.html'>Publications</a>"; // publications list
    m = m + "<ul>"
    m = m + "<li><a href='voters_publication.html'>Voters</a></li>";
    m = m + "<li>";
    m = m + "<i></i>";
    m = m + "<a href='candidate_presidential_publication.html'>Candidates</a>";
    m = m + "<ul>";
    m = m + "<li><a href='candidate_presidential_publication.html'>Presidential Elections</a></li>";
    m = m + "<li><a href='candidate_parliamentary_publication.html'>Parliamentary Elections</a></li>";
    m = m + "</ul>";
    m = m + "</li>";
    m = m + "</ul>";
    m = m + "</li>";
    m = m + "<li><a href='voters_forms.html'>Voter Forms</a></li>";
    m = m + "<li>";
    m = m + "<i></i>";
    m = m + "<a href='resources_presidential.html'>Candidate Forms</a>"; //candidate forms
    m = m + "<ul>";
    m = m + "<li><a href='resources_presidential.html'>Presidential Elections</a></li>";
    m = m + "<li><a href='resources_parliamentary.html'>Parliamentary Elections</a></li>";
    m = m + "</ul>";
    m = m + "</li>";
    m = m + "<li>";
    m = m + "<i></i>";
    m = m + "<a>FAQs</a>"; //faqs
    m = m + "<ul>";
    m = m + "<li><a href='faq_voters.html'>Voters</a></li>";
    m = m + "<li><a href='faq_candidates.html'>Candidates</a></li>";
    m = m + "<li><a href='faq_elections.html'>Elections</a></li>";
    m = m + "</ul>";
    m = m + "</li>";
    m = m + "</ul>";
    m = m + "</li>";

    m = m + "<li class='mainNavLink'>";
    m = m + "<a href='contact.html'>CONTACT</a>";
    m = m + "</li>";

    m = m + "</ul>";
    m = m + "<!--end output from buildMainMenu()-->";
    return m;
}

/*function headerLinks(isBullet){
	var links = [
		"<a href='contact.html'>Contact Us</a>", 
		"<a href='sitemap.html'>Sitemap</a>"
		];
	var l = "";
	for (i = 0; i < links.length; i++) {
		if (isBullet == "true"){
			l = l + "<li>";
		}
		l = l + links[i];
		if (isBullet == "true"){
			l = l + "</li>";
		}
		if ((isBullet == "false") && (i != links.length-1)){
			l = l + " | ";
		}
	}
	return l;
}*/

function eldLogo() {
    var s = "";
    s = s + "<!--start output from eldLogo()-->";
    s = s + "<div headerLogo'>";
    s = s + "<a href='https://www.eld.gov.sg'><img id='imgEldLogo' src='images/img_eld_logo1.svg' alt='Elections Department' title='Go to Elections Department Home'></a>";
    s = s + "</div>";
    s = s + "<!--end output from eldLogo()-->";
    //document.getElementById("divEldLogo").innerHTML = s;
    return s;
}

function fnButtons() {
    var s = "";
    s = s + "<div class='d-flex flex-row'>";
    s = s + "<a href='javascript:void(0)' class='navbar-toggle mobile-search-btn'>";
    s = s + "<img src='images/icon-magnifying-glass.png' alt='Search'>";
    s = s + "</a>";
    s = s + "<a href='#menu' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>";
    s = s + "<div class='sr-only'>Toggle navigation</div>";
    s = s + "<img src='images/icon-menu.png' alt='Menu'>";
    s = s + "</a>";
    s = s + "</div>";

    //document.getElementById("divEldLogo").innerHTML = s;
    return s;
}

function sgGov() {
    var s = "";
    s = s + "<!--start output from sgGov()-->";
    s = s + "<div class='col col-xs-12'>";
    s = s + "<a href='https://www.gov.sg' target='_blank'><img src='images/sg-gov-logo-s.png' alt='A Singapore Government Agency Website' title='Singapore Government Logo' style='width: 15px; margin-right: 5px;'>A Singapore Government Agency Website</a>";
    s = s + "</div>";

    s = s + "<!--end output from sgGov()-->";
    //document.getElementById("divGov").innerHTML = s;
    return s;
}

function mainheader() {
    var s = "";
    s = s + "<!--start output from mainheader()-->";
    s = s + "<nav id='menu'>";
    s = s + buildMainMenu();
    s = s + "</nav>"

    //header portion	
    /*
    s = s + "<div class='hidden-xs hidden-sm col-md-12'>";
    	s = s + "<FORM name='frmGoogleSearch' method='GET' target='blank' action='https://www.google.com/cse' title='Google Search'>";
    	s = s + "<div class='headerSearch'>";
    		s = s + "<div class='input-group'>";		  
    			s = s + "<div class='searchHolder'>";
    				s = s + "<div class='searchInput'>";
    					s = s + "<input type='text' class='form-control' name='q' maxlength='255' value='' >";
    				s = s + "</div>";
    				s = s + "<div class='searchSelect'>";
    					s = s + "<select class='select-dropdown' name='cx' id='site'>";
    					s = s + "<option value='016904018275838959723:uloslx6aheo'>Within this site</option>";
    					s = s + "</select>";
    				s = s + "</div>";
    				s = s + "<span class='input-group-btn'>";
    				s = s + "<button class='btn btn-default' type='submit' formmethod='GET' formaction='https://www.google.com/cse' name='frmGoogleSearch' onClick='javascript: document.frmGoogleSearch.submit(;'>";
    				s = s + "<img src='images/icon-magnifying-glass.png' alt='Search' >";
    				s = s + "</button>";   
    				s = s + "</span>";
    			s = s + "</div>";
    		s = s + "</div>";
    	s = s + "</div>";
    	s = s + "</FORM>";
    s = s + "</div>";
    */

    s = s + "<!--end output from mainheader()-->";
    //document.getElementById("divMainheader").innerHTML = s;
    return s;
}

function mobileSearch() {
    var s = "";
    s = s + "<!--start output from mobileSearch()-->";
    s = s + "<FORM name='frmGoogleSearchMobile' method='GET' target='blank' action='https://www.google.com/cse'>";
    s = s + "<div class='mobile-search-bar'>";
    s = s + "<div class='container'>";
    s = s + "<div class='input-group'>";
    s = s + "<input type='text' class='form-control' name='q' maxlength='255' value='' placeholder='Search within this service'>";
    s = s + "<div class='searchSelect' style='display: none'>";
    s = s + "<select class='select-dropdown' name='cx' id='site'>";
    //set "Within this site" as default for mobile search
    s = s + "<option value='016904018275838959723:uloslx6aheo' selected>Within this site</option>";
    s = s + "</select>";
    s = s + "</div>";
    s = s + "<span class='input-group-btn'>";
    s = s + "<button class='btn btn-default' type='submit' formmethod='GET' formaction='https://www.google.com/cse' name='frmGoogleSearch' onClick='javascript: document.frmGoogleSearchMobile.submit(;'>Search</button>";
    s = s + "</span>";
    s = s + "</div>";
    s = s + "</div>";
    s = s + "</div>";
    s = s + "</FORM>";
    s = s + "<!--end output from mobileSearch()-->";
    //document.getElementById("divMobileSearch").innerHTML = s;
    return s;
}

function mainMenu() {
    var s = "";
    s = s + "<!--start output from mainMenu()-->";
    s = s + buildMainMenu();
    s = s + "<!--end output from mainMenu()-->";
    //document.getElementById("divMainMenu").innerHTML = s;	
    return s;
}

function lastUpdated(dt) {
    document.getElementById("spanLastUpdated").innerHTML = dt;
}

function printHeaderFrame() {
    var s = "";
    s = s + "<!--start output from printHeaderFrame()-->";
    s = s + "<div class='container'>";
    s = s + "<div class='row'>";
    s = s + "<div id='divGov' class='divSGGov'>";
    s = s + sgGov();
    s = s + "</div>";
    s = s + "</div>";
    s = s + "<div class='row'>";
    s = s + "<div class='col col-xs-12 md-3' id='divEldLogo'>";
    s = s + eldLogo();
    s = s + "</div>";
    s = s + "<div class='ml-auto my-auto'>";
    s = s + fnButtons();
    s = s + "</div>";
    s = s + "<div class='mainNav col-md-9 d-none d-lg-block'>";
    s = s + "<div id='divMainMenu'>";
    s = s + mainMenu();

    //search button for large screen
    s = s + "<a href='javascript:void(0)' class='mobile-search-btn mobile-search-btn-lg'>";
    s = s + "<img src='images/icon-magnifying-glass.png' alt='Search'>";
    s = s + "</a>";


    s = s + "</div>";
    s = s + "</div>";

    //s = s + "<div id='divPageActionHeader' class='pageAction col-md-8 hidden-xs hidden-sm'>";
    //s = s + "</div>";			

    s = s + "</div>";
    s = s + "<div class='row'>";
    s = s + "<div id='divMainheader' class='hidden-xs hidden-sm'>";
    s = s + mainheader();
    s = s + "</div>";
    s = s + "</div>";
    s = s + "<div id='divMobileSearch'>";
    s = s + mobileSearch();
    s = s + "</div>";
    s = s + "</div>";

    s = s + "<!--end output from printHeaderFrame()-->";
    document.getElementById("divHeaderFrame").innerHTML = s;

}