import './FooterStyle.css';
import NavbarComponent from './NavbarComponent';

import React from 'react';


import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { solid, regular, brands, icon } from '@fortawesome/fontawesome-svg-core/import.macro'







const Footer =() => {

    return(
        <footer>
            <div class="Footer-container">
                <div class="section-about">
                    <h2>About Us</h2>
                    <p>Tom and Journey is a Travel website platform for everyone want to plan your trip
                        and want to schedule a trip according to the plan set out, at the lowest price
                        by Our website will callculate the lowest budget.
                    </p>
                </div>
                <ul>
                    <li><a href="#"><i class="fa-brands fa-facebook" aria-hidden="true"> </i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"> </i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"> </i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube" aria-hidden="true"> </i></a></li>
                    
                </ul>
                
                
                

            </div>
        </footer>
    )
};
export default Footer;