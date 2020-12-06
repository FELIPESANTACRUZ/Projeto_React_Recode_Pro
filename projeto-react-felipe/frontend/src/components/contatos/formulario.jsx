import React, {useState,useEffect } from 'react';

// import img_contatos from '../../image/imagem_certa_contatos.png';


 const FormularioContatos = () => {

const [comentarios,setComenatarios] = useState([]);
const [render, setRender] = useState(false);
const [msg , setMsg] = useState(false);

useEffect(async () => {
    const url = "http://localhost/PHP/backend/indexcomentario.php";
    const response = await fetch(url);
    setComenatarios(await response.json());
},[render])




function registerComentarios(event) {
    event.preventDefault();
    let formData = new FormData(event.target);
    const url = "http://localhost/PHP/backend/comentarios.php";
    fetch (url,{
        method:"POST",body:formData
    }).then((response) => response.json()).then((dados) => {
        setRender(!render);
        setMsg(dados);
        setTimeout(()=>{
            setMsg(false); 
        },2000);
});
}
    return (

<div className="container">

<form onSubmit = {registerComentarios} >
<h3>Dúvidas,Elogios ou Sugestões:</h3><br />
<div className="form-group">
  Nome :<br />
  <input type="text" name="nome" class="form-control" aria-describedby="nome" placeholder="Digite seu nome" />
  <small id="nome"className="form-text text-muted">Identificação não obrigatória.</small><br />
  Deixe sua mensagem :
  <textarea type="text" className="form-control" name="msg" placeholder="Dúvidas,Elogios ou Sugestões" ></textarea><br />
  <input type="checkbox" className="form-check-input" id="exampleCheck1" />
  <label className="form-check-label" for="exampleCheck1">Autorizo a publicação de meu comentário no site da Full Stack Eletro LTDA.</label><br /><br />
  <button  className="btn btn-dark"  value="Enviar" >Enviar</button>
</div>
</form>


{ msg && <div class="alert alert-success mx-auto mt-4 w-75" role="alert">
Cadastro efetuado com sucesso!
</div>
}

{comentarios.map((element)=> {
    return (
        <div key={element.id} className="card w-50 mx-auto mt-3 mb-5">
        <div className="card-header">
           Nome: {element.nome}
        </div>
        <div className="cardy-body">
            Mensagem: {element.msg}
        </div>
    </div>
    )
}).reverse()

}


</div>
)
}

 export default FormularioContatos;

