import React, { useState } from 'react';
import "./work.css"


const Work = () => {

    const [currentSlide, setCurrentSlide] = useState(0);

    const data = [
        {
        id: "1",
        icon: "./asset/globe.png",
        title: "Web Design",
        desc:
            "I have a lot of experience writing web applications. And also has the ability to use a variety of tools is excellent.",
        img:
            "https://99designs-blog.imgix.net/blog/wp-content/uploads/2018/10/attachment_100040756-e1538485934255.jpeg?auto=format&q=60&fit=max&w=930",
        },
        {
        id: "2",
        icon: "./asset/mobile.png",
        title: "Mobile Application",
        desc:
            "I have experience working with clients. and develop a phone application to come out that can actually be used",
        img:
            "https://i.pinimg.com/originals/e9/c9/2f/e9c92f7869d682a6fa5a97fb8a298f30.jpg",
        },
        {
        id: "3",
        icon: "./asset/writing.png",
        title: "Contact",
        desc:
            "ADDRESSES : 32 Kumpil 3 Rd. Nakhon Pathom, Thailand",
        // img:
        //     "https://i.pinimg.com/originals/a9/f6/94/a9f69465d972a004ad581f245d6ad581.jpg",
        }
    ];

    const handleClick = (way) => {
        way === "left"
          ? setCurrentSlide(currentSlide > 0 ? currentSlide - 1 : 2)
          : setCurrentSlide(currentSlide < data.length - 1 ? currentSlide + 1 : 0);
      };

    return (
        <div className='work' id='work'>
            <div className='slider' style={{transform:`translateX(-${currentSlide *100}vw)`}}>
                {data.map((d) => (
                
                <div className='containerWork'>
                    <div className='item'>
                        <div className='left'>
                            <div className='leftContainer'>
                                <div className='imgContainer'>
                                    <img src={d.icon} alt='' />
                                </div>
                                <h1>{d.title}</h1>
                                <h4>{d.desc}</h4>
                            </div>
                        </div>
                        <div className='right'>
                            <img 
                            src={d.img}
                            alt='' />
                        </div>
                    </div>
                    
                </div>
                ))}
            </div>
            
            <img src='asset/arrow.png' className='arrow left' alt='' onClick={()=>handleClick("left")}/>
            <img src='asset/arrow.png' className='arrow right' alt='' onClick={()=>handleClick()}/>
        </div>
    );
}

export default Work;