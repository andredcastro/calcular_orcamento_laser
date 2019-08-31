        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Orçamentos</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Insira os dados <small>abaixo para gerar o orçamento</small></h2>                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
         <!-- jQuery -->
    <script src="jquery-3.4.1.min.js"></script>
<script>
<script>
    function moeda2float(moeda)
	{        
		//retirar os pontos        
		moeda = moeda.replace(".","");        
		//mudar a virgula pelo ponto        
		moeda = moeda.replace(",",".");        
		//retornar em formato float        
		return parseFloat(moeda);
	}
	
	function float2moeda(num) 
	{        
		x = 0;        
	if(num<0)
		{                
			num = Math.abs(num);            
			x = 1;        
		}        
	if(isNaN(num))                 
		num = "0";            
		cents = Math.floor((num*100+0.5)%100);    
		num = Math.floor((num*100+0.5)/100).toString();    
	if(cents < 10)         
		cents = "0" + cents;        
	for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)       
		num = num.substring(0,num.length-(4*i+3))+'.'+num.substring(num.length-(4*i+3));        
		ret = num + ',' + cents;        
	if (x == 1)        
		ret = ' - ' + ret;        
	return ret;
	}	
	
	/*calculo
         * #totalvenda
         * + #valor_entrega
         * - #desconto
         * = #valor_apagar
         * - #dinheiro
         * = #troco
         * 
         */
        
	function calArea() 
	{        
		//calcular valor da entrega e da desconto
                var valor_area = 0;
                var largura = $('#largura').val();
                var altura = $('#altura').val();
		valor_area = largura * altura;    
                
        return valor_area;
                
            }
        function calcMoldura(){
             //dividir area/moldura
                var valor_moldura = 0;
                var valor_area = $('#valor_area').val();
                var tamanho_moldura = $('#tamanho_moldura').val();
                valor_moldura = valor_area / tamanho_moldura;
                
        return valor_moldura;
        }
        function calc_valorProduto(){
            var valor_produto = 0;
            var valor_moldura = $('#valor_moldura').val();
            valor_moldura = parseInt(valor_moldura);
            var valor_mdf = $('#valor_mdf').val();
            valor_mdf = parseInt(valor_mdf);
            var tempo_laser = $('#tempo_laser').val();
            tempo_laser = parseInt(tempo_laser);
            var mao_obra = $('#mao_obra').val();
            mao_obra = parseInt(mao_obra);
            var taxa_adm = $('#taxa_adm').val();
            taxa_adm = parseInt(taxa_adm);            
            var taxa_embalagem = $('#taxa_embalagem').val();
            taxa_embalagem = parseInt(taxa_embalagem);
            valor_produto = valor_moldura / valor_mdf + tempo_laser + mao_obra + taxa_adm + taxa_embalagem;
            
        return valor_produto;
                        
        }
        //funcao para calcular a porcentagem e somar ao valor_produto
        //apos a soma mostrar o valor como moeda e sem arredondarmento
        function calcPorcentagem(){
                var valor_porcentagem = 0;
                var valor_produto = $('#valor_produto').val();
            valor_produto = parseInt(valor_produto);
            var porcentagem_comissao = $('#porcentagem_comissao').val();
            porcentagem_comissao = parseInt(porcentagem_comissao);
            valor_porcentagem =  (valor_produto *(porcentagem_comissao/100);
            valor_produto = (valor_produto + valor_porcentagem);
            
            return valor_produto;
            }
            function formatDinheiro(n, currency) {
        return currency + " " + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
    }
$(document).ready(function()
{        
 //bind do input largura        
 $("input[name='largura']").keypress(function(){                
 $("#valor_area").val(calArea());    }); 
 $("input[name='largura']").keyup(function(){                
 $("#valor_area").val(calArea());    }); 
 $("input[name='largura']").keydown(function(){                
 $("#valor_area").val(calArea());  });
 //bind do input altura        
 $("input[name='altura']").keypress(function(){                
 $("#valor_area").val(calArea());    }); 
 $("input[name='altura']").keyup(function(){                
 $("#valor_area").val(calArea());    }); 
 $("input[name='altura']").keydown(function(){                
 $("#valor_area").val(calArea());  });
 //bind do input valor moldura        
 $("input[name='tamanho_moldura']").keypress(function(){                
 $("#valor_moldura").val(calcMoldura());    }); 
 $("input[name='tamanho_moldura']").keyup(function(){                
 $("#valor_moldura").val(calcMoldura());    }); 
 $("input[name='tamanho_moldura']").keydown(function(){                
 $("#valor_moldura").val(calcMoldura());  });
 //bind do input valor produlto        
 $("input[name='tamanho_moldura']").keypress(function(){                
 $("#valor_produto").val(calc_valorProduto());    }); 
 $("input[name='tamanho_moldura']").keyup(function(){                
 $("#valor_produto").val(calc_valorProduto());    }); 
 $("input[name='tamanho_moldura']").keydown(function(){                
 $("#valor_produto").val(calc_valorProduto());  });
 //bind do input valor produlto        
 $("input[name='tempo_laser']").keypress(function(){                
 $("#valor_produto").val(calc_valorProduto());    }); 
 $("input[name='tempo_laser']").keyup(function(){                
 $("#valor_produto").val(calc_valorProduto());    }); 
 $("input[name='tempo_laser']").keydown(function(){                
 $("#valor_produto").val(calc_valorProduto());  });
 //mao_obra
 $("input[name='mao_obra']").keypress(function(){                
 $("#valor_produto").val(calc_valorProduto());    }); 
 $("input[name='mao_obra']").keyup(function(){                
 $("#valor_produto").val(calc_valorProduto());    }); 
 $("input[name='mao_obra']").keydown(function(){                
 $("#valor_produto").val(calc_valorProduto());  });
 //taxa_adm
 $("input[name='taxa_adm']").keypress(function(){                
 $("#valor_produto").val(calc_valorProduto());    }); 
 $("input[name='taxa_adm']").keyup(function(){                
 $("#valor_produto").val(calc_valorProduto());    }); 
 $("input[name='taxa_adm']").keydown(function(){                
 $("#valor_produto").val(calc_valorProduto());  });
 //taxa_embalagem
 $("input[name='taxa_embalagem']").keypress(function(){                
 $("#valor_produto").val(calc_valorProduto());    }); 
 $("input[name='taxa_embalagem']").keyup(function(){                
 $("#valor_produto").val(calc_valorProduto());    }); 
 $("input[name='taxa_embalagem']").keydown(function(){                
 $("#valor_produto").val(calc_valorProduto());  }); 
 
 //porcentagem_comissao
 $("input[name='porcentagem_comissao']").keypress(function(){                
 $("#valor_produto").val(calcPorcentagem());    }); 
 $("input[name='porcentagem_comissao']").keyup(function(){                
 $("#valor_produto").val(calcPorcentagem());    }); 
 $("input[name='porcentagem_comissao']").keydown(function(){                
 $("#valor_produto").val(calcPorcentagem());  });
 
 
  
});	
	
	
	
    </script>
    <div class="row">
    <div class="col-sm-6">
        <form action="" method="post" enctype="multipart/form-data">
            <label>CLIENTE</label> 
<div class="input-group input-group">
<span class="input-group-addon">Nome: </span>
<input type="text" class="form-control" name="nome_cliente" autocomplete="off" id="nome_produto" value="Maria das Graças">
</div>             
            <label>PRODUTO</label> 
<div class="input-group input-group">
<span class="input-group-addon">Produto: </span>
<input type="text" class="form-control" name="nome_produto" autocomplete="off" id="nome_produto" value="Caixa Personalizada">
</div>
            <label>QUANTIDADE DE PEÇAS</label> 
<div class="input-group input-group">
<span class="input-group-addon">Quantidade: </span>
<input type="number" class="form-control" name="nome_produto" autocomplete="off" id="nome_produto" value="1">
</div>            
            <label>MESA DE CORTE</label>            
<div class="input-group input-group">
    <span class="input-group-addon"><b><font color="blue">Largura: 1,30cm</b></font></span>
    <input type="number" name="largura" id="largura" autocomplete="off" class="form-control" value="" title="Largura da mesa de corte"/>
</div>
<div class="input-group input-group">
    <span class="input-group-addon"><b><font color="blue">Altura: 90cm</b></font></span>
    <input type="number" name="altura" id="altura" autocomplete="off" class="form-control" value="" title="Altura da mesa de corte"/>
</div>
            <input type="number" name="valor_area" id="valor_area" value=""><br>
            <label>FOLHA MDF</label> 
<div class="input-group input-group">
<span class="input-group-addon">Valor da folha: </span>
<input type="number" class="form-control" name="valor_mdf" autocomplete="off" id="valor_mdf" value="Caixa">
</div>
</div>   
    <div class="col-sm-6">
        <label>CALCULAR VALOR DA PERÇA</label><hr> 
<div class="input-group input-group">
<span class="input-group-addon">Tamanho da Moldura:</span>
<input type="number" name="tamanho_moldura" id="tamanho_moldura" autocomplete="off" class="form-control" value="" title="Tamanho da moldura"/><p>
</div> 
            <input type="number" name="valor_moldura" id="valor_moldura" value=""><br>
<div class="input-group input-group">
<span class="input-group-addon"><b><font color="red">Tempo de Laser: 1,20</b></font></span>                            
<input type="number" class="form-control " name="tempo_laser" autocomplete="off" id="tempo_laser" value="" title="Tempo de laser">
</div>
<div class="input-group input-group">
<span class="input-group-addon"><b>Mão de obra: 0,10</b></span>                                
<input type="number" class="form-control" name="mao_obra" id="mao_obra" autocomplete="off"  value="" title="Mão de obra">
</div>
<div class="input-group input-group">
    <span class="input-group-addon"><b><font color="blue">Taxa Administrativa: 0,15</b></font></span>
    <input type="number" name="taxa_adm" id="taxa_adm" autocomplete="off" class="form-control" title="Taxa de administração"  value="" />
</div>   
<div class="input-group input-group">
    <span class="input-group-addon"><b><font color="blue">Taxa da embalagem: 0,05</b></font></span>
    <input type="number" name="taxa_embalagem" id="taxa_embalagem" autocomplete="off" class="form-control" value="" title="Taxa da embalagem"/>
</div>
<div class="input-group input-group">
    <span class="input-group-addon"><b><font color="blue">Comissão:10%</b></font></span>
    <input type="number" name="porcentagem_comissao" id="porcentagem_comissao" autocomplete="off" class="form-control" value="" title="Comissão %"/>
</div>   
<div class="input-group input-group">
    <span class="input-group-addon"><b><font color="green">Valor final do produto:</b></font></span>
    <input type="number" name="valor_produto" id="valor_produto" autocomplete="off" class="form-control" value="" title="Valor de venda do produto"/>
</div> 
   </form>
</div>      
    </div>
 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
