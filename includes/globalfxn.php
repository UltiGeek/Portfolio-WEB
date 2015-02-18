<?php
/**
 * Created Using Fadsel Engine.
 * User: Fahad
 * Date: 2/19/15
 * Time: 12:15 AM
 */

/*
 * @params $active ==> active page's name
 * this function takes one parameter called $active,
 * the it  echoes out
 * the title of the page
 */
function get_title_for_this_page($active){

    switch($active){
        case "index"    : echo "Karibu"; break;
        case "portfolio": echo "Portfolio"; break;
        case "contact"  : echo "Contact Us"; break;
        case "clients"  : echo "Clients"; break;
        case "services"  : echo "Services"; break;
        case "about"  : echo "About Us"; break;
        default         : echo "Hamna kitu"; break;
    }
}