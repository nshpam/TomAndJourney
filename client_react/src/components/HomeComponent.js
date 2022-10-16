
import NavbarComponent from './NavbarComponent';

const HomeComponent=() => {
    return (

        <div id='bg-image'>
            
        <div>
            <NavbarComponent/>
            <div id="buffer-top"></div>
            
            
                <h2 md={5} id="topic-text">The Wonderful Trip Planner</h2>
            
            
                <h1 md={5} id="highlight-text">Adventure</h1>
            
            
        
        <h1 md={5} id ='line-text'></h1>
        
        
            <p md={5} id="detail-text">With Tom & Journey, you can plan your trip anywhere<br />
            at anytime. We help you save budget by showing you<br />the best deal.</p>
        
        <div id="space-buffer"></div>
        
        {/* <Col md={2}><Button  id="button-1">Get Started</Button></Col>
        <Col md={2}><Button  id="button-2">See more</Button></Col> */}
        
            </div>
        </div>
    );
}

export default HomeComponent;