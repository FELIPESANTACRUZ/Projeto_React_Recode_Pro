import React, {useState,useEffect } from 'react';
import Compras from '../../image/compras.jpg';


export default function FormCompras({children}) {

  const [usuario,setUsuario] = useState([]);
  
  useEffect( () => {
    async function chamaApi(){
      const url = "http://localhost/PHP/backend/indexUsuario.php";
      const res = await fetch(url);
      setUsuario(await res.json());
  }
  chamaApi()
},[])

  
 
   return (
    <div className="mb-4">
    <h1> {children} </h1>

{/* <!--card Imagem nav compras --> */}
<div className="card mb-3 container">
    <img className="Compras" className="card-img-top" src={Compras} alt="compras" style={{width:"200px", height:"200px"}}></img>
    <div className="card-body">
      <h5 className="card-title text-danger">Comprar</h5>
    </div>
  </div>
  {/* <!--card fim imagem nav compras --> */}

       <form >
  

    <div className="row">
      <div className="col">
      <label for="nome_cliente">Nome</label>
        <input type="text" id="nome_cliente" name="nome_cliente" class="form-control" placeholder="Nome" />
      </div>
      </div>


      <div className="col mb-4">
      <label for="inputEmail4">Sobrenome</label>
        <input type="text"   name="sobrenome_cliente" id="sobrenome_cliente" class="form-control" placeholder="Sobrenome" />
      </div>
     
      <div className="form-group col-md-6">
        <label for="inputEmail4">CPF</label>
        <input type="text" class="form-control"   name="cpf_cliente" id="cpf_cliente" placeholder="somente numeros" />
      </div>

      <div className="form-group col-md-2">
        <label for="cep_cliente">CEP</label>
        <input type="text" class="form-control mb-2" name="cep_cliente" id="cep_cliente" placeholder="CEP" />
      </div>

      <div className="form-group col-md-6">
        <label for="inputEmail4">Telefone</label>
        <input type="text" class="form-control" name="tel_cliente"   id="tel_cliente" placeholder="Telefone" />
      </div>
    
    <div className="form-row">
      <div className="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control"   name="email_cliente" id="email_cliente" placeholder="Email" />
      </div>

  
    
</div>

<input className="btn-danger" type="reset" value="reset formulario" ></input><br /><br />

<button type="submit" class="btn btn-success">Comprar Produto</button>
</form>

{
  usuario.map((row) => {
    return (
      <div key = {row.idProdutos} className="card w-50 mx-auto mt-3">
      <div className="card-header">
      <p>
      {row.categoria}
      </p>
      </div>
      <div className="card-header">
      <img src={row.imagem} />
      </div>
      <div className="card-header">
      {row.preco_final}
      </div>
      <div className="card-header">
      {row.nome}
      </div>
      <div className="card-body">
      {row.sobrenome}
      </div>
      <div className="card-body">
      {row.email}
      </div>

    </div>
    )
  }
  )
}

</div>

  

  )
}