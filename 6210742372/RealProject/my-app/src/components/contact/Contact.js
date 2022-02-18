import "./contact.css"

const Contact = () => {
    

    return (
        <div className='contact' id="contact">
            <div className="left">
                <img src="asset/dome-about.png" alt="" />
            </div>
            <div className="right">
                <h2>About me</h2>
                <h4>I, Thanapon Puakalong, am studying software engineering at Thammasat University</h4>
                <h4>in the third year. While studying at the university, I learned a lot about planning a</h4>
                <h4>project, working as a team, and solving many kinds of problems. Moreover, I am eager to</h4>
                <h4>learn new things. I can adapt to new environments and get along with others well.</h4>
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

export default Contact;