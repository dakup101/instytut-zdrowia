export default function specialistsAjax(doctor_id){
    
    console.log('-- Start Ajax --')
    document.getElementById('specialistsSpinner').classList.add('show');
    document.querySelector('.site-overlay').classList.add('show');
    
    setTimeout(()=>{
        document.querySelector('.specialists__popup').classList.toggle('show');
    },200)


    let ajaxUrl = 'http://localhost/iz/wp-admin/admin-ajax.php'
    let data = {
        action : 'specialistsajax',
        doctor : doctor_id,
    }
    fetch(ajaxUrl, {
        method: "POST",
        body: JSON.stringify(data),
        headers: {"content-type": "application/json"}
    })
    .then(response => response.json()) 
    .then(json => {
        let name : string = json.title + " " + json.name;
        let desc : string = json.desc;
        let img : string = json.img;

        document.getElementById('specialistName').innerHTML = name;
        document.getElementById('specialistDesc').innerHTML = desc;
        (document.getElementById('specialistImg') as HTMLImageElement).src = img;
        setTimeout(()=>{
            document.getElementById('specialistsSpinner').classList.remove('show');
        },1000)
    });
}