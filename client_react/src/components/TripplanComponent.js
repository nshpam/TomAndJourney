import './Tripplanner.css';
import NavbarComponent from './NavbarComponent';
import Footer from './Footer';


const TripplanComponents=()=>{

    return(
        <div id="Trip">

        <NavbarComponent/>

        <div class="trip-content">
        
            <div class="row justify-content-center form-row">
                    
                <div class="input-group-1 ">
                    <input type="text" class="form-control card-input-1" placeholder="START" id="start-field"></input>
                </div>
                <div class="underline-input-1"></div>

                <div class="input-group ">
                    <input type="text" class="form-control card-input-2 " placeholder="DESTINATION" id="destination-field"></input>
                </div>   
                <div class="plan-button">
                    <button type="button" class="btn btn-default btn-block " id="plan-button">PLAN</button>
                </div>
            </div>
    </div>
        <Footer/>

    </div>
    )

}
export default TripplanComponents;