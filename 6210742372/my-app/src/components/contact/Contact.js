import React, { Component } from "react";

import "./contact.css";
import axios from "axios";

class Contact extends Component {
    
    state = {
        aboutme: ""
    }
    
    async componentDidMount() {
        const res = await axios.get('http://127.0.0.1:8000/api/aboutme');
        if(res.data.status === 200) {
            this.setState({
                aboutme: res.data.aboutme[0].desc
            });
        }
    }

    
    render() {
        var about_desc = this.state.aboutme ;
        return (
            <div className='contact' id="contact">
                <div className="left">
                    <img src="asset/dome-about.png" alt="" />
                </div>
                <div className="right">
                    <h2>About me</h2>
                    <h4>{about_desc}</h4>
                    <h2>Education</h2>
                    <div>
                        <h4>Suankularb Wittayalai School (2012 - 2018)</h4>
                        <h4>Gifted and Talent Education Program</h4>
                        <h4>GPAX : 3.82</h4>
                        <h4>Thammasat University (2019 - current)</h4>
                        <h4>Faculty of Engineering, Software Engineering</h4>
                        <h4>Current GPAX : 3.89</h4>
                    </div>
                </div>
            </div>
        );
    }
}

export default Contact;