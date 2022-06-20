import Image from './Georgio.png'


const SurveyCarousel = () => {
    return ( 
        <div className="survey_carousel">
            <div className="img_container">
                <img src={Image} height={140} width={140}/>
            </div>
            <div className='in_carousel_text'>
                <h4>Survey Title</h4>
                <p>Survey Description</p>
            </div>
        </div>
     );
}
 
export default  SurveyCarousel ;