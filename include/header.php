<!-- Desktop -->
<div id="divHeaderFrame" class="header headroom headroom--not-bottom headroom--pinned headroom--top">
    <!--start output from printHeaderFrame()-->
    <div class="container">
        <div class="row">
            <div id="divGov" class="divSGGov">
                <!--start output from sgGov()-->
                <div class="col col-xs-12"><a href="https://www.bawaslu.go.id/" target="_blank"><img
                            src="<?php echo ROOT_URL?>/assets/images/logo/main-logo.jpg?<?php echo rand()?>"
                            alt="logo bawaslu sleman" title="Singapore Government Logo"
                            style="width: 50px; margin-right: 5px;">Badan Pengawas Pemilu Republik Indonesia</a></div>
                <!--end output from sgGov()-->
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12 md-3" id="divEldLogo">
                <!--start output from eldLogo()-->
                <div><a href="<?php echo ROOT_URL?>"><img id="imgEldLogo"
                            src="<?php echo ROOT_URL?>/assets/images/logo/logo-ppid.png?<?php echo rand()?>"
                            alt="Main Logo Bawaslu Sleman" title="Main Logo Bawaslu Sleman" class="img-fluid"></a>
                </div>
                <!--end output from eldLogo()-->
            </div>
            <div class="ml-auto my-auto">
                <div class="d-flex flex-row"><a href="javascript:void(0)" class="navbar-toggle mobile-search-btn"><img
                            src="images/icon-magnifying-glass.png" alt="Search"></a><a href="#menu"
                        class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <div class="sr-only">Toggle navigation</div><img src="images/icon-menu.png" alt="Menu">
                    </a></div>
            </div>
            <div class="mainNav col-md-9 d-none d-lg-block">
                <div id="divMainMenu">
                    <!--start output from mainMenu()-->
                    <!--start output from buildMainMenu()-->
                    <ul>
                        <li class="mainNavLink"><a href="<?php echo ROOT_URL?>">Beranda</a></li>
                        <li><a href="javascript:void(0)">Profil</a>
                            <ul>
                                <li><a href="javascript:void(0)">Tugas dan Wewenang</a></li>
                                <li><a href="javascript:void(0)">Visi Misi</a></li>
                                <li><a href="javascript:void(0)">Struktur Organisasi</a></li>
                                <li><a href="javascript:void(0)">Ketua dan Anggota</a></li>
                                <li><a href="javascript:void(0)">Seketariat</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Publikasi</a>
                            <ul>
                                <li><a href="javascript:void(0)">Pengawasan</a></li>
                                <li><a href="javascript:void(0)">Pres Release</a></li>
                                <li><a href="javascript:void(0)">Buletin</a></li>
                                <li><a href="javascript:void(0)">Buku</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Putusan</a>
                            <ul>
                                <li><a href="javascript:void(0)">Penanganan Pelanggaran</a></li>
                                <li><a href="javascript:void(0)">Sengketa</a></li>
                            </ul>
                        </li>
                        <li class="mainNavLink"><a href="javascript:void(0)">Pengumuman</a></li>
                        <li class="mainNavLink"><a href="javascript:void(0)">Pengaduan</a></li>
                        <li><a href="javascript:void(0)">Gallery</a>
                            <ul>
                                <li><a href="javascript:void(0)">Gallery Foto</a></li>
                                <li><a href="javascript:void(0)">Gallery Video</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!--end output from buildMainMenu()-->
                    <!--end output from mainMenu()--><a href="javascript:void(0)"
                        class="mobile-search-btn mobile-search-btn-lg"><img
                            src="<?php echo ROOT_URL?>/assets/images/icon/icon-magnifying-glass.png" alt="Search"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="divMainheader" class="hidden-xs hidden-sm">
                <!--start output from mainheader()-->
                <!--end output from mainheader()-->
            </div>
        </div>
        <div id="divMobileSearch">
            <!--start output from mobileSearch()-->
            <form name="frmGoogleSearchMobile" method="GET" target="blank" action="https://www.google.com/cse">
                <div class="mobile-search-bar">
                    <div class="container">
                        <div class="input-group"><input type="text" class="form-control" name="q" maxlength="255"
                                value="" placeholder="Search within this service">
                            <div class="searchSelect" style="display: none"><select class="select-dropdown" name="cx"
                                    id="site">
                                    <option value="016904018275838959723:uloslx6aheo" selected="">Within this site
                                    </option>
                                </select></div><span class="input-group-btn"><button class="btn btn-default"
                                    type="submit" formmethod="GET" formaction="https://www.google.com/cse"
                                    name="frmGoogleSearch"
                                    onclick="javascript: document.frmGoogleSearchMobile.submit(;">Search</button></span>
                        </div>
                    </div>
                </div>
            </form>
            <!--end output from mobileSearch()-->
        </div>
    </div>
    <!--end output from printHeaderFrame()-->
</div>

<!-- Mobile -->
<nav id="menu" class="mm-menu mm-menu_offcanvas mm-menu_effect-slide mm-menu_pageshadow mm-menu_position-right"
    aria-hidden="true">
    <!--start output from buildMainMenu()-->
    <!--end output from buildMainMenu()-->
    <div class="mm-panels">
        <div id="mm-1" class="mm-panel mm-panel_opened">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-navbar__title"><span>Menu</span></a></div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="online.html" class="mm-listitem__text">VOTERS</a><a
                        class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-2"><span class="mm-sronly">Open
                            submenu</span></a></li>
                <li class="mm-listitem"><a href="candidate_presidential_online.html"
                        class="mm-listitem__text">CANDIDATES</a><a class="mm-btn mm-btn_next mm-listitem__btn"
                        href="#mm-5"><span class="mm-sronly">Open submenu</span></a></li>
                <li id="menuElection" class="mm-listitem"><a href="elections.html"
                        class="mm-listitem__text">ELECTIONS</a><a class="mm-btn mm-btn_next mm-listitem__btn"
                        href="#mm-10"><span class="mm-sronly">Open submenu</span></a></li>
                <li id="menuWho" class="mm-listitem"><a href="our_role.html" class="mm-listitem__text">WHO WE
                        ARE</a><a class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-14"><span class="mm-sronly">Open
                            submenu</span></a></li>
                <li class="mm-listitem"><a href="" onclick="return false" style="cursor:default"
                        class="mm-listitem__text">RESOURCES</a><a class="mm-btn mm-btn_next mm-listitem__btn"
                        href="#mm-15"><span class="mm-sronly">Open submenu</span></a></li>
                <li class="mainNavLink mm-listitem"><a href="contact.html" class="mm-listitem__text">CONTACT</a>
                </li>
            </ul>
        </div>
        <div id="mm-2" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1"
                    aria-haspopup="true" aria-owns="mm-1"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-1" aria-hidden="true"><span>VOTERS</span></a></div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="elections_safevoting.html" class="mm-listitem__text">Making Voting
                        Safe</a></li>
                <li class="mm-listitem"><a href="online.html" class="mm-listitem__text">Voter Services</a></li>
                <li class="mm-listitem"><i></i><a href="voter_education.html" class="mm-listitem__text">Voter
                        Education</a><a class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-3"><span
                            class="mm-sronly">Open submenu</span></a></li>
                <li class="mm-listitem"><i></i><a href="voting_in_singapore.html" class="mm-listitem__text">Voting
                        in Singapore</a><a class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-4"><span
                            class="mm-sronly">Open submenu</span></a></li>
                <li class="mm-listitem"><a href="voters_forms.html" class="mm-listitem__text">Voter Forms</a></li>
                <li class="mm-listitem"><a href="faq_voters.html" class="mm-listitem__text">Voter FAQs</a></li>
            </ul>
        </div>
        <div id="mm-3" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-2"
                    aria-haspopup="true" aria-owns="mm-2"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-2" aria-hidden="true"><span>Voter Education</span></a></div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="voters_firsttime.html" class="mm-listitem__text">First-Time
                        Voters</a></li>
                <li class="mm-listitem"><a href="voters_overseas.html" class="mm-listitem__text">Overseas Voters</a>
                </li>
                <li class="mm-listitem"><a href="voters_mobility.html" class="mm-listitem__text">Elderly and Voters
                        with disabilities</a></li>
                <li class="mm-listitem"><a href="voters_ballotsecrecy.html" class="mm-listitem__text">Ballot
                        Secrecy</a></li>
                <li class="mm-listitem"><a href="voters_dosdonts.html" class="mm-listitem__text">Do's &amp; Don'ts
                        of Voting</a></li>
                <li class="mm-listitem"><a href="voters_commonterms.html" class="mm-listitem__text">Common Terms</a>
                </li>
                <li class="mm-listitem"><a href="voters_publication.html" class="mm-listitem__text">Publications</a>
                </li>
            </ul>
        </div>
        <div id="mm-4" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-2"
                    aria-haspopup="true" aria-owns="mm-2"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-2" aria-hidden="true"><span>Voting in Singapore</span></a>
            </div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="voters.html" class="mm-listitem__text">Who can vote?</a></li>
                <li class="mm-listitem"><a href="voters_compulsory.html" class="mm-listitem__text">What should I do
                        if I did not vote in a past election?</a></li>
                <li class="mm-listitem"><a href="voters_how.html" class="mm-listitem__text">How to vote?</a></li>
                <li class="mm-listitem"><a href="voters_pollcard.html" class="mm-listitem__text">Poll Card</a></li>
            </ul>
        </div>
        <div id="mm-5" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1"
                    aria-haspopup="true" aria-owns="mm-1"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-1" aria-hidden="true"><span>CANDIDATES</span></a></div>
            <ul class="mm-listview">
                <li class="mm-listitem"><i></i><a href="candidate_presidential_online.html"
                        class="mm-listitem__text">Presidential Elections</a><a
                        class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-6"><span class="mm-sronly">Open
                            submenu</span></a></li>
                <li class="mm-listitem"><i></i><a href="candidate_parliamentary_online.html"
                        class="mm-listitem__text">Parliamentary Elections</a><a
                        class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-7"><span class="mm-sronly">Open
                            submenu</span></a></li>
                <li class="mm-listitem"><i></i><a href="registry.html" class="mm-listitem__text">Political
                        Donations</a><a class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-8"><span
                            class="mm-sronly">Open submenu</span></a></li>
                <li class="mm-listitem"><i></i><a href="resources_presidential.html" class="mm-listitem__text">Candidate
                        Forms</a><a class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-9"><span
                            class="mm-sronly">Open submenu</span></a></li>
                <li class="mm-listitem"><a href="faq_candidates.html" class="mm-listitem__text">Candidate FAQs</a>
                </li>
            </ul>
        </div>
        <div id="mm-6" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-5"
                    aria-haspopup="true" aria-owns="mm-5"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-5" aria-hidden="true"><span>Presidential Elections</span></a>
            </div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="candidate_presidential_online.html" class="mm-listitem__text">Candidate
                        Services</a></li>
                <li class="mm-listitem"><a href="candidate_presidential_qualify.html"
                        class="mm-listitem__text">Qualifying Criteria</a></li>
                <li class="mm-listitem"><a href="candidate_presidential_nominationprep.html"
                        class="mm-listitem__text">Preparing for Nomination</a></li>
                <li class="mm-listitem"><a href="candidate_presidential_nomination.html"
                        class="mm-listitem__text">Nomination Day</a></li>
                <li class="mm-listitem"><a href="candidate_presidential_campaign.html"
                        class="mm-listitem__text">Campaigning</a></li>
                <li class="mm-listitem"><a href="candidate_presidential_cooling.html"
                        class="mm-listitem__text">Prohibited Activities on Cooling-off Day and Polling Day</a></li>
                <li class="mm-listitem"><a href="candidate_presidential_polling.html" class="mm-listitem__text">Polling
                        &amp; Counting</a></li>
                <li class="mm-listitem"><a href="candidate_presidential_postactivities.html"
                        class="mm-listitem__text">Post-election Activities</a></li>
                <li class="mm-listitem"><a href="candidate_presidential_handbook.html"
                        class="mm-listitem__text">Candidate Handbook &amp; Advisory</a></li>
                <li class="mm-listitem"><a href="candidate_presidential_publication.html"
                        class="mm-listitem__text">Publications</a></li>
            </ul>
        </div>
        <div id="mm-7" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-5"
                    aria-haspopup="true" aria-owns="mm-5"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-5" aria-hidden="true"><span>Parliamentary
                        Elections</span></a></div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="candidate_parliamentary_online.html"
                        class="mm-listitem__text">Candidate Services</a></li>
                <li class="mm-listitem"><a href="candidate_parliamentary_qualify.html"
                        class="mm-listitem__text">Qualifying Criteria</a></li>
                <li class="mm-listitem"><a href="candidate_parliamentary_nominationprep.html"
                        class="mm-listitem__text">Preparing for Nomination</a></li>
                <li class="mm-listitem"><a href="candidate_parliamentary_nomination.html"
                        class="mm-listitem__text">Nomination Day</a></li>
                <li class="mm-listitem"><a href="candidate_parliamentary_campaign.html"
                        class="mm-listitem__text">Campaigning</a></li>
                <li class="mm-listitem"><a href="candidate_parliamentary_cooling.html"
                        class="mm-listitem__text">Prohibited Activities on Cooling-off Day and Polling Day</a></li>
                <li class="mm-listitem"><a href="candidate_parliamentary_polling.html" class="mm-listitem__text">Polling
                        &amp; Counting</a></li>
                <li class="mm-listitem"><a href="candidate_parliamentary_postactivities.html"
                        class="mm-listitem__text">Post-election Activities</a></li>
                <li class="mm-listitem"><a href="candidate_parliamentary_handbook.html"
                        class="mm-listitem__text">Candidate Handbook &amp; Advisory</a></li>
                <li class="mm-listitem"><a href="candidate_parliamentary_publication.html"
                        class="mm-listitem__text">Publications</a></li>
            </ul>
        </div>
        <div id="mm-8" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-5"
                    aria-haspopup="true" aria-owns="mm-5"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-5" aria-hidden="true"><span>Political Donations</span></a>
            </div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="registry.html" class="mm-listitem__text">Overview of Political
                        Donations Act</a></li>
                <li class="mm-listitem"><a href="registry_donations_handbook.html" class="mm-listitem__text">Political
                        Donations Handbook</a></li>
                <li class="mm-listitem"><a href="registry_donations_forms.html" class="mm-listitem__text">Political
                        Donations Forms</a></li>
            </ul>
        </div>
        <div id="mm-9" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-5"
                    aria-haspopup="true" aria-owns="mm-5"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-5" aria-hidden="true"><span>Candidate Forms</span></a></div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="resources_presidential.html" class="mm-listitem__text">Presidential
                        Elections</a></li>
                <li class="mm-listitem"><a href="resources_parliamentary.html" class="mm-listitem__text">Parliamentary
                        Elections</a></li>
            </ul>
        </div>
        <div id="mm-10" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1"
                    aria-haspopup="true" aria-owns="mm-1"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-1" aria-hidden="true"><span>ELECTIONS</span></a></div>
            <ul class="mm-listview">
                <li class="mm-listitem"><i></i><a href="elections.html" class="mm-listitem__text">Registers of
                        Electors</a><a class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-11"><span
                            class="mm-sronly">Open submenu</span></a></li>
                <li class="mm-listitem"><a href="elections_presidential.html" class="mm-listitem__text">Presidential
                        Elections</a></li>
                <li class="mm-listitem"><a href="elections_parliamentary.html" class="mm-listitem__text">Parliamentary
                        Elections</a></li>
                <li class="mm-listitem"><a href="elections_type_electoral.html" class="mm-listitem__text">Types of
                        Electoral Divisions</a></li>
                <li class="mm-listitem"><i></i><a href="elections_past_results.html" class="mm-listitem__text">Election
                        Results</a><a class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-12"><span
                            class="mm-sronly">Open submenu</span></a></li>
                <li class="mm-listitem"><a href="legislation.html" class="mm-listitem__text">Legislation</a></li>
                <li class="mm-listitem"><i></i><a href="elections_map_electoral.html"
                        class="mm-listitem__text">Maps</a><a class="mm-btn mm-btn_next mm-listitem__btn"
                        href="#mm-13"><span class="mm-sronly">Open submenu</span></a></li>
                <li class="mm-listitem"><a href="faq_elections.html" class="mm-listitem__text">Election FAQs</a>
                </li>
            </ul>
        </div>
        <div id="mm-11" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-10"
                    aria-haspopup="true" aria-owns="mm-10"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-10" aria-hidden="true"><span>Registers of Electors</span></a>
            </div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="elections.html" class="mm-listitem__text">About Registers of
                        Electors</a></li>
                <li class="mm-listitem"><a href="elections_timeline.html" class="mm-listitem__text">Revision &amp;
                        Timeline</a></li>
            </ul>
        </div>
        <div id="mm-12" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-10"
                    aria-haspopup="true" aria-owns="mm-10"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-10" aria-hidden="true"><span>Election Results</span></a>
            </div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="elections_past_results.html" class="mm-listitem__text">Presidential
                        Election Results</a></li>
                <li class="mm-listitem"><a href="elections_past_parliamentary.html"
                        class="mm-listitem__text">Parliamentary General Election Results</a></li>
                <li class="mm-listitem"><a href="elections_past_by.html" class="mm-listitem__text">Parliamentary
                        By-Election Results</a></li>
            </ul>
        </div>
        <div id="mm-13" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-10"
                    aria-haspopup="true" aria-owns="mm-10"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-10" aria-hidden="true"><span>Maps</span></a></div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="elections_map_electoral.html" class="mm-listitem__text">Electoral
                        Divisions</a></li>
                <li class="mm-listitem"><a href="elections_map_pd.html" class="mm-listitem__text">Polling
                        Districts</a></li>
            </ul>
        </div>
        <div id="mm-14" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1"
                    aria-haspopup="true" aria-owns="mm-1"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-1" aria-hidden="true"><span>WHO WE ARE</span></a></div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="our_role.html" class="mm-listitem__text">Our Role</a></li>
                <li class="mm-listitem"><a href="our_culture.html" class="mm-listitem__text">Our Culture</a></li>
                <li class="mm-listitem"><a href="our_journey.html" class="mm-listitem__text">Our Journey</a></li>
                <li class="mm-listitem"><a href="csr.html" class="mm-listitem__text">Corporate Social
                        Responsibility</a></li>
            </ul>
        </div>
        <div id="mm-15" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1"
                    aria-haspopup="true" aria-owns="mm-1"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-1" aria-hidden="true"><span>RESOURCES</span></a></div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="media.html" class="mm-listitem__text">Press Releases</a></li>
                <li class="mm-listitem"><a href="gazettes.html" class="mm-listitem__text">Gazettes</a></li>
                <li class="mm-listitem"><a href="legislation.html" class="mm-listitem__text">Legislation</a></li>
                <li class="mm-listitem"><a href="ebrc.html" class="mm-listitem__text">Reports of Electoral
                        Boundaries Review Committee</a></li>
                <li class="mm-listitem"><i></i><a href="candidate_presidential_publication.html"
                        class="mm-listitem__text">Publications</a><a class="mm-btn mm-btn_next mm-listitem__btn"
                        href="#mm-16"><span class="mm-sronly">Open submenu</span></a></li>
                <li class="mm-listitem"><a href="voters_forms.html" class="mm-listitem__text">Voter Forms</a></li>
                <li class="mm-listitem"><i></i><a href="resources_presidential.html" class="mm-listitem__text">Candidate
                        Forms</a><a class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-18"><span
                            class="mm-sronly">Open submenu</span></a></li>
                <li class="mm-listitem"><i></i><a class="mm-listitem__text">FAQs</a><a
                        class="mm-btn mm-btn_next mm-listitem__btn" href="#mm-19"><span class="mm-sronly">Open
                            submenu</span></a></li>
            </ul>
        </div>
        <div id="mm-16" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-15"
                    aria-haspopup="true" aria-owns="mm-15"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-15" aria-hidden="true"><span>Publications</span></a></div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="voters_publication.html" class="mm-listitem__text">Voters</a></li>
                <li class="mm-listitem"><i></i><a href="candidate_presidential_publication.html"
                        class="mm-listitem__text">Candidates</a><a class="mm-btn mm-btn_next mm-listitem__btn"
                        href="#mm-17"><span class="mm-sronly">Open submenu</span></a></li>
            </ul>
        </div>
        <div id="mm-17" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-16"
                    aria-haspopup="true" aria-owns="mm-16"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-16" aria-hidden="true"><span>Candidates</span></a></div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="candidate_presidential_publication.html"
                        class="mm-listitem__text">Presidential Elections</a></li>
                <li class="mm-listitem"><a href="candidate_parliamentary_publication.html"
                        class="mm-listitem__text">Parliamentary Elections</a></li>
            </ul>
        </div>
        <div id="mm-18" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-15"
                    aria-haspopup="true" aria-owns="mm-15"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-15" aria-hidden="true"><span>Candidate Forms</span></a></div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="resources_presidential.html" class="mm-listitem__text">Presidential
                        Elections</a></li>
                <li class="mm-listitem"><a href="resources_parliamentary.html" class="mm-listitem__text">Parliamentary
                        Elections</a></li>
            </ul>
        </div>
        <div id="mm-19" class="mm-panel mm-hidden" aria-hidden="true">
            <div class="mm-navbar mm-navbar_sticky"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-15"
                    aria-haspopup="true" aria-owns="mm-15"><span class="mm-sronly">Close submenu</span></a><a
                    class="mm-navbar__title" href="#mm-15" aria-hidden="true"><span>FAQs</span></a></div>
            <ul class="mm-listview">
                <li class="mm-listitem"><a href="faq_voters.html" class="mm-listitem__text">Voters</a></li>
                <li class="mm-listitem"><a href="faq_candidates.html" class="mm-listitem__text">Candidates</a></li>
                <li class="mm-listitem"><a href="faq_elections.html" class="mm-listitem__text">Elections</a></li>
            </ul>
        </div>
    </div>
</nav>