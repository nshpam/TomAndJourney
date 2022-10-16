import React from 'react';
import { Button } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import './Home.css';
import './Home.scss';
import NavbarComponent from './Navbar';
import { Container, Row , Col} from 'reactstrap';

const HomeComponent=() => {
    return (
        <>
        <NavbarComponent />
        <div id='bg-image'>
            
        <Container>
            <div id="buffer-top"></div>
            
            <Row md={5} >
                <Col md={5} id="topic-text">The Wonderful Trip Planner</Col>
            </Row>
            <Row md={5} id="highlight-text-row">
                <Col md={5} id="highlight-text">Adventure</Col>
            </Row>
            
        
        <Col md={5} id ='line-text'></Col>
        
        <Row md={5}>
            <Col md={5} id="detail-text">With Tom & Journey, you can plan your trip anywhere<br />
            at anytime. We help you save budget by showing you<br />the best deal.</Col>
        </Row>
        <Row md={5} id="space-buffer"></Row>
        <Row id="button-group" md={5}>
        <Col md={2}><Button  id="button-1">Get Started</Button></Col>
        <Col md={2}><Button  id="button-2">See more</Button></Col>
        </Row>
            </Container>
        </div>
        
        </>
        
    );
}

export default HomeComponent;