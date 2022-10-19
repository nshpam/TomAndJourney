import './FooterStyle.css';
import NavbarComponent from './NavbarComponent';

import React from 'react';





const Footer =() => {

    return(
        <div>
        <footer class="footer">
            <div class="Footer-container">
                <div class="section-about">
                    <h2>About Us</h2>
                    <p>Tom and Journey is a Travel website platform for everyone want to plan your trip
                        and want to schedule a trip according to the plan set out, at the lowest price
                        by Our website will callculate the lowest budget.
                    </p>
                </div>
                <ul class="sci">
                    <li><a href="https://www.facebook.com/hutao.wangsheng.5/" target="_blank" ><i class="fa-brands fa-facebook" aria-hidden="true"> </i></a></li>
                    <li><a href="https://www.instagram.com/mercuone_/" target="_blank"><i class="fa-brands fa-instagram" aria-hidden="true"> </i></a></li>
                    <li><a href="https://twitter.com/tsubak1Dayo" target="_blank"><i class="fa-brands fa-twitter" aria-hidden="true"> </i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCOYoE0pcSHqaihnoHm7U36g" target="_blank"><i class="fa-brands fa-youtube" aria-hidden="true"> </i></a></li>
                    
                </ul>
                
                
                
                
            </div>
            
        </footer>
        <div class="copyrightText">
                <p>©KMUTNB Trademarks and brands are the property of their respective owners.</p>
                </div>
        </div>
    )
};
export default Footer;