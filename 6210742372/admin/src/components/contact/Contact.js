import { Component } from "react";
import axios from "axios";

import "./contact.css"

class Contact extends Component {
    
    state = {
        aboutme: "",
        aboutmeEdit: ""
    }
    
    async componentDidMount() {
        const res = await axios.get('http://127.0.0.1:8000/api/aboutme');
        if(res.data.status === 200) {
            this.setState({
                aboutme: res.data.aboutme[0].desc
            });
        }
    }

    handleInput = (e) => {
        this.setState({
            aboutmeEdit: e.target.value
        })
    }

    update = async(e) => {
        e.preventDefault();

        let req = {
            data: this.state.aboutmeEdit
        };
        const res = await axios.put('http://127.0.0.1:8000/api/edit-aboutme', req)
        if(res.data.status === 200){
            alert(res.data.message)
            this.setState({
                aboutmeEdit: "",
            });
            window.location.reload(false);
        }  
    }
    

    render() {
        var about_desc = this.state.aboutme ;

        return (
            <div className='contact' id="contact">
                <h2>About me</h2>
                <div>
                    <h3>Current description</h3>
                    <h4>{about_desc}</h4>
                </div>
                <h2>Edit description</h2>
                <form>
                    <input name="editInput" onChange={this.handleInput} value={this.state.aboutmeEdit}></input>
                    <button type="submit" onClick={this.update}>Edit</button>
                </form>
            </div>
        );
    }


}

export default Contact;