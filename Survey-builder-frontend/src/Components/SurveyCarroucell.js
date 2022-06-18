import Image from './Georgio.png'

const SurveyCarroucell = () => {
    return ( 
        <div className="survey_carroucell">
            <div className="img_container">
                <img src={Image} height={140} width={140}/>
            </div>
            <div className='in_carroucell_text'>
                <h4>Survey Title</h4>
                <p>Survey Description</p>
            </div>
        </div>
     );
}
 
export default SurveyCarroucell;