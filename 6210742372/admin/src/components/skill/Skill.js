import { Component } from "react";
import axios from "axios";

import "./skill.css"

class Skill extends Component {
    
    state = {
        framework: '',
        programlang: '',
        tool: ''
    }

    handleInput = (e) => {
        this.setState({
            [e.target.name]: e.target.value
        });
    }

    setData = async(e) => {
        // console.log(this.state[e.target.name]);
        e.preventDefault();

        if(e.target.name == "framework"){
            let req = {
                data: this.state.framework
            };
            const res = await axios.post('http://127.0.0.1:8000/api/add-framework', req)
            if(res.data.status === 200){
                alert(res.data.message)
                this.setState({
                    framework: '',
                });
            }
        }
        if(e.target.name == "programlang"){
            let req = {
                data: this.state.programlang
            };
            const res = await axios.post('http://127.0.0.1:8000/api/add-lang', req)
            if(res.data.status === 200){
                alert(res.data.message)
                this.setState({
                    programlang: '',
                });
            }
        }
        if(e.target.name == "tool"){
            let req = {
                data: this.state.tool
            };
            const res = await axios.post('http://127.0.0.1:8000/api/add-tool', req)
            if(res.data.status === 200){
                alert(res.data.message)
                this.setState({
                    tool: ''
                });
            }
        }
    }

    render() {
        return (
            <div className='testimonials' id="testimonials">
                <h1>Technical Skills</h1>
                <form>
                    <h3>Framework</h3>
                    <input type="text" name="framework" onChange={this.handleInput} value={this.state.framework} placeholder="something"></input>
                    <button name="framework" onClick={this.setData}>ADD</button>
                </form>
                <form>
                    <h3>Programing Language</h3>
                    <input type="text" name="programlang" onChange={this.handleInput} value={this.state.programlang} placeholder="something"></input>
                    <button name="programlang" onClick={this.setData}>ADD</button>
                </form>
                <form>
                    <h3>Tools</h3>
                    <input type="text" name="tool" onChange={this.handleInput} value={this.state.tool} placeholder="something"></input>
                    <button name="tool" onClick={this.setData}>ADD</button>
                </form>
            </div>
        );
    }
}

export default Skill;