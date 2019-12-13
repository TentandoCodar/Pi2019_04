function abrirLoja(){
  window.location.href = "./colecao.php";
}

function entrarClientes(){
  window.location.href = "./admin_cliente.php";
}

function abrirCadastroCliente(){
  window.location.href = "./admin_cadastrar_cliente.php";
}

function entrarFuncionario(){
  window.location.href = "./admin_usuario.php";
}

function abrirCadastroUsuario(){
  window.location.href = "./admin_cadastrar_usuario.php";
}

function entrarFornecedores(){
  window.location.href = "./admin_fornecedores.php";
}

function entrarProdutos(){
  window.location.href = "./admin_produtos.php";
}

function abrirCadastroProduto(){
  window.location.href = "./admin_cadastrar_produto.php";
}

function abrirCadastroFornecedor(){
  window.location.href = "./admin_cadastrar_fornecedor.php";
}

function entrarFicha(){
  window.location.href = "./admin_ficha.php";
}

function abrirCadastroFicha(){
  window.location.href = "./admin_cadastrar_ficha.php";
}

function entrarCusto(){
  window.location.href = "./admin_cadastrar_custo.php";
}

function abrirCadastroCusto(){
  window.location.href = "./admin_cadastrar_custo.php";
}

function openProduct( code="" ){
  window.location.href = "./produto.php?id=" + code;
}

function fecharProduto(){
  window.location.href = "./colecao.php";
}

function entrarAdmin(){
  window.location.href = "./admin.php";
}

function abrirAbout(){
  window.location.href = "./about.php";
}
//-------------------------MENUDOIDAO-----------------------------------

const target2 = document.querySelectorAll('.style_menu_pc');
const backgroundClass2 = 'style_menu_pc_animate';


function backgroundScroll(){
  const windowTop = window.pageYOffset - 50;
  target2.forEach(function(element){
    if((windowTop) > element.offsetTop){
      element.classList.add(backgroundClass2);
      document.getElementById('HeaderContainer').classList.add('links_animate');
      document.getElementById('HeaderContainer').classList.remove('links');
      document.getElementById('link_logo').classList.add('link_logo_animate');
      document.getElementById('link_logo').classList.remove('link_logo');
    }else{
      element.classList.remove(backgroundClass2);
      document.getElementById('HeaderContainer').classList.add('links');
      document.getElementById('HeaderContainer').classList.remove('links_animate');
      document.getElementById('link_logo').classList.remove('link_logo_animate');
      document.getElementById('link_logo').classList.add('link_logo');
    }
  });
}

backgroundScroll();

if(target2.length){
  window.addEventListener('scroll', function(){
    backgroundScroll();
  })
}

//----------------------MENUDOIDAOCEL-----------------------------------

const target3 = document.querySelectorAll('.style_menu_cel2');
const backgroundClass3 = 'style_menu_cel2_amimate';


function backgroundScroll2(){
  const windowTop = window.pageYOffset - 50;
  target3.forEach(function(element){
    if((windowTop) > element.offsetTop){
      element.classList.add(backgroundClass3);
    }else{
      element.classList.remove(backgroundClass3);
    }
  });
}

backgroundScroll2();

if(target3.length){
  window.addEventListener('scroll', function(){
    backgroundScroll2();
  })
}

//---------------------MENU CEL-------------------------------------

function abrirMenu(){

  document.getElementById('menu_cel').classList.add('menu_cel_animate');
  document.getElementById('menu_cel').classList.remove('menu_cel');

}

function fecharMenu(){

  document.getElementById('menu_cel').classList.add('menu_cel');
  document.getElementById('menu_cel').classList.remove('menu_cel_animate');

}

//----------------------------FILTRO CEL---------------------------------------

function abrirFiltro(){
  document.getElementById('categoriaMenu').classList.add('filtro_categorias_cel_animate');
  document.getElementById('categoriaMenu').classList.remove('filtro_categorias_cel');
}

function fecharFiltro(){
  document.getElementById('categoriaMenu').classList.remove('filtro_categorias_cel_animate');
  document.getElementById('categoriaMenu').classList.add('filtro_categorias_cel');
}

//-----------------------------------TEXTO TENDENCIAS-------------------------
function fecharModalTendencias(){
  document.getElementById('modal_tendencia').classList.remove('modal_tendencia_animate');
  document.getElementById('modal_tendencia').classList.add('modal_tendencia');
  document.getElementById('escurecer').classList.add('escurecer');
  document.getElementById('escurecer').classList.remove('escurecer_animate');
}

function textBody(){
  document.getElementById('modal_tendencia').classList.add('modal_tendencia_animate');
  document.getElementById('modal_tendencia').classList.remove('modal_tendencia');
  document.getElementById('escurecer').classList.remove('escurecer');
  document.getElementById('escurecer').classList.add('escurecer_animate');
  document.getElementById("text_ID").innerHTML = 'Body durante o ano inteiro.';
  document.getElementById("text_description_ID").innerHTML = 'Usar body e maiô e ir muito além da areia é mais do que possível – e, sim, você também tem o aval para experimentar a tendência. Mas se a ideia de vestir roupas de praia durante a rotina ainda causa estranhamento, comece elegendo bodies que se assemelhem a blusas convencionais - vale, também, se atentar aos materiais e texturas: lamê, lurex e veludo, por exemplo, são materiais que permitem usar o body também durante a noite. Peças de de cintura alta escondem a vibe praiana do modelito, que ainda assim não perde a carinha de verão.';
}

function textBralette(){
  document.getElementById('modal_tendencia').classList.add('modal_tendencia_animate');
  document.getElementById('modal_tendencia').classList.remove('modal_tendencia');
  document.getElementById('escurecer').classList.remove('escurecer');
  document.getElementById('escurecer').classList.add('escurecer_animate');
  document.getElementById("text_ID").innerHTML = 'Um bralette a seu dispor.';
  document.getElementById("text_description_ID").innerHTML = 'Se usado com transparências, melhor ainda! Lance mão de um bralette rendado ou de veludo e combine com camisas, bodies e blusas translúcidas – o efeito é sexy, mostra um pouco de pele sem deixá-la totalmente exposta e combina com aquela sua calça jeans de todo dia.';
}

function textCores(){
  document.getElementById('modal_tendencia').classList.add('modal_tendencia_animate');
  document.getElementById('modal_tendencia').classList.remove('modal_tendencia');
  document.getElementById('escurecer').classList.remove('escurecer');
  document.getElementById('escurecer').classList.add('escurecer_animate');
  document.getElementById("text_ID").innerHTML = 'Cores fortes mais apaixonantes.';
  document.getElementById("text_description_ID").innerHTML = 'Não pense duas vezes antes de dizer “sim” para as cores alegres. A nuance que já brilha em terras estrangeiras e tem grandes chancer de virar hit aqui é o mostarda: mais neutro que o amarelo usual e cheio de personalidade, além de ficar um charme com jeans de lavagens escuras e outros pantones mais apagados, como cinza, preto, branco... Antes de torcer o nariz, experimente – quem sabe a surpresa não é das boas?';
}

function textJeans(){
  document.getElementById('modal_tendencia').classList.add('modal_tendencia_animate');
  document.getElementById('modal_tendencia').classList.remove('modal_tendencia');
  document.getElementById('escurecer').classList.remove('escurecer');
  document.getElementById('escurecer').classList.add('escurecer_animate');
  document.getElementById("text_ID").innerHTML = 'Com Calça Jeans.';
  document.getElementById("text_description_ID").innerHTML = 'O jeans é aquela peça curinga que cabe para todos as estações do ano. No inverno não poderia ser diferente. As calças jeans podem compor produções despojadas, modernas e até para momentos mais chiques. No inverno dá para criar looks com tênis, casacos, jaquetas, blusas e diversificar nas combinações. É importante salientar que a cor do jeans da calça pode pedir determinado tipo de blusa/casaco. Use o jeans claro com algo mais colorido, de preferências cores fortes/estampadas. O jeans escuro cai bem com cores mais claras.'
}

function textNeon(){
  document.getElementById('modal_tendencia').classList.add('modal_tendencia_animate');
  document.getElementById('modal_tendencia').classList.remove('modal_tendencia');
  document.getElementById('escurecer').classList.remove('escurecer');
  document.getElementById('escurecer').classList.add('escurecer_animate');
  document.getElementById("text_ID").innerHTML = 'O Neon de volta com tudo.';
  document.getElementById("text_description_ID").innerHTML = 'A forte tendência em cor para a moda verão é o neon! O tom fluorescente que foi moda nos anos 1980 e 2000, agora volta com tudo! Em pequenos detalhes que acendem os looks de verão de forma pontual, ou em produções monocromáticas, as cores vibrantes dão um verdadeiro up em qualquer visual. O diferencial, deste ano, é que o neon vem em produções de moda praia e mais casuais até em looks mais arrumadinhos e formais.';
}

function textListras(){
  document.getElementById('modal_tendencia').classList.add('modal_tendencia_animate');
  document.getElementById('modal_tendencia').classList.remove('modal_tendencia');
  document.getElementById('escurecer').classList.remove('escurecer');
  document.getElementById('escurecer').classList.add('escurecer_animate');
  document.getElementById("text_ID").innerHTML = 'Listras.';
  document.getElementById("text_description_ID").innerHTML = 'Apesar das estampas florais serem tendência, as listras também marcam forte presença nas estações. Para refrescar e renovar esse padrão clássico, os listrados vêm coloridos e mesclados com muito branco e off-white. Além disso, eles vêm tanto com amplo espaçamento entre si, como em padronagens bem fininhas. Como a gente pode observar nestes looks maravilhosos, o listrado deste verão é bem variado.';
}

//-------------------------BARRA DE PESQUISA----------------------------------

function abrirPesquisa(){
  document.getElementById('idBarraPesquisa').classList.add('barradepesquisa_animate');
  document.getElementById('idBarraPesquisa').classList.remove('barradepesquisa');
}

function fecharBarraPesquisa(){
  document.getElementById('idBarraPesquisa').classList.remove('barradepesquisa_animate');
  document.getElementById('idBarraPesquisa').classList.add('barradepesquisa');
}

//------------------------ADMIN------------------------------------------------

function abrirOpcoes(){
  document.getElementById('fundopreto_id').classList.add('fundopreto_animate');
  document.getElementById('fundopreto_id').classList.remove('fundopreto');
  document.getElementById('opcoes_id').classList.add('opcoes_animate');
  document.getElementById('opcoes_id').classList.remove('opcoes');
  document.getElementById('button_more').classList.add('botao_more_animate');
  document.getElementById('button_more').classList.remove('botao_more');
  document.getElementById('button_menos').classList.add('botao_menos_animate');
  document.getElementById('button_menos').classList.remove('botao_menos');
}

function fecharOpcoes(){
  document.getElementById('fundopreto_id').classList.remove('fundopreto_animate');
  document.getElementById('fundopreto_id').classList.add('fundopreto');
  document.getElementById('opcoes_id').classList.remove('opcoes_animate');
  document.getElementById('opcoes_id').classList.add('opcoes');
  document.getElementById('button_more').classList.remove('botao_more_animate');
  document.getElementById('button_more').classList.add('botao_more');
  document.getElementById('button_menos').classList.remove('botao_menos_animate');
  document.getElementById('button_menos').classList.add('botao_menos');
}

//----------------------ABRIR MODAL -------------------------------

function abrirModal(email, name, code, phone = ""){


  document.getElementById('UserEmail').innerHTML = email;
  document.getElementById('UserName').innerHTML = name;
  document.getElementById('UserCode').innerHTML = code;
  if(phone) {
    const UserPhone = document.getElementById('UserPhone');
    if(UserPhone) {
      UserPhone.remove();
    }
    const html = `<p id="UserPhone" class="pl-4 pr-3 text_modal_texto">${phone}</p>`
    document.getElementById("ModalDataContent").insertAdjacentHTML('beforeend',html);
  }
  document.getElementById('modal_products').classList.add('modal_admin_animate');
  document.getElementById('modal_products').classList.remove('modal_admin');
  document.getElementById('escurecer').classList.remove('escurecer');
  document.getElementById('escurecer').classList.add('escurecer_animate');
  document.getElementById('body').classList.add('overflow');
}

function openDatasheetModal(name,code, id){

  document.getElementById('index').value = id;
  document.getElementById('DatasheetName').innerHTML = name;
  
  document.getElementById('DatasheetCode').innerHTML = code;
  
  document.getElementById('modal_products').classList.add('modal_admin_animate');
  document.getElementById('modal_products').classList.remove('modal_admin');
  document.getElementById('escurecer').classList.remove('escurecer');
  document.getElementById('escurecer').classList.add('escurecer_animate');
  document.getElementById('body').classList.add('overflow');
}

function closeModalDatasheet(){
  document.getElementById('modal_products').classList.remove('modal_admin_animate');
  document.getElementById('modal_products').classList.add('modal_admin');
  document.getElementById('escurecer').classList.add('escurecer');
  document.getElementById('escurecer').classList.remove('escurecer_animate');
  document.getElementById('body').classList.remove('overflow');
}

function productModalOpen(description, price, unity, code, provider) {
  document.getElementById('ProductDescription').innerHTML = description;
  document.getElementById('ProductPrice').innerHTML = price;
  document.getElementById('ProductUnity').innerHTML = unity;
  document.getElementById('ProductCode').innerHTML = code;
  document.getElementById('ProductProvider').innerHTML = provider;

  document.getElementById('modal_products').classList.add('modal_admin_animate');
  document.getElementById('modal_products').classList.remove('modal_admin');
  document.getElementById('escurecer').classList.remove('escurecer');
  document.getElementById('escurecer').classList.add('escurecer_animate');
  document.getElementById('body').classList.add('overflow');
}

function fecharModalProducts(){
  document.getElementById('modal_products').classList.remove('modal_admin_animate');
  document.getElementById('modal_products').classList.add('modal_admin');
  document.getElementById('escurecer').classList.add('escurecer');
  document.getElementById('escurecer').classList.remove('escurecer_animate');
  document.getElementById('body').classList.remove('overflow');
}

//-----------------------HELPPPPP--------------------------

function abrirHelp(){
  document.getElementById('modal_help').classList.add('modal_help_animate');
  document.getElementById('escurecer').classList.add('escurecer_animate');
  document.getElementById('body').classList.add('overflow');

}

function fecharModalHelp(){
  document.getElementById('modal_help').classList.remove('modal_help_animate');
  document.getElementById('escurecer').classList.remove('escurecer_animate');
  document.getElementById('body').classList.remove('overflow');
}

// -------------------------------ANIMATIONS INDEXX--------------------------------

function abrirCirculo(){
  document.getElementById('circulo1').classList.add('circulo_animate');
}

function fechaCirculo(){
  document.getElementById('circulo1').classList.remove('circulo_animate');
}

function abrirCirculo2(){
  document.getElementById('circulo2').classList.add('circulo_animate');
}

function fechaCirculo2(){
  document.getElementById('circulo2').classList.remove('circulo_animate');
}

//ANIMATIONS

var $target = $('.anime'),
    animationClass = 'anime_start',
    offset = $(window).height() * 4/4;

    function animeScroll(){
      var documentTop = $(document).scrollTop();

      $target.each(function(){
        var itemTop = $(this).offset().top;
        if (documentTop > itemTop - offset) {
          $(this).addClass(animationClass);
        }else{
          $(this).removeClass(animationClass);
        }
      })
    }

animeScroll();

$(document).scroll(function(){
  animeScroll();
});

//---

var $target2 = $('.anime_img'),
    animationClass2 = 'anime_img_start',
    offset2 = $(window).height() * 4/4;

    function animeScroll2(){
      var documentTop2 = $(document).scrollTop();

      $target2.each(function(){
        var itemTop2 = $(this).offset().top;
        if (documentTop2 > itemTop2 - offset2) {
          $(this).addClass(animationClass2);
        }else{
          $(this).removeClass(animationClass2);
        }
      })
    }

animeScroll2();

$(document).scroll(function(){
  animeScroll2();
});

//-------

var $target3 = $('.anime_img2'),
    animationClass3 = 'anime_img_start2',
    offset3 = $(window).height() * 4/4;

    function animeScroll3(){
      var documentTop3 = $(document).scrollTop();

      $target3.each(function(){
        var itemTop3 = $(this).offset().top;
        if (documentTop3 > itemTop3 - offset3) {
          $(this).addClass(animationClass3);
        }else{
          $(this).removeClass(animationClass3);
        }
      })
    }

animeScroll3();

$(document).scroll(function(){
  animeScroll3();
});

//---

var $target4 = $('.anime_img3'),
    animationClass4 = 'anime_img_start3',
    offset4 = $(window).height() * 4/4;

    function animeScroll4(){
      var documentTop4 = $(document).scrollTop();

      $target4.each(function(){
        var itemTop4 = $(this).offset().top;
        if (documentTop4 > itemTop4 - offset4) {
          $(this).addClass(animationClass4);
        }else{
          $(this).removeClass(animationClass4);
        }
      })
    }

animeScroll4();

$(document).scroll(function(){
  animeScroll4();
});


//-----------------------------ANIMATIONS TENDENCIAS------------------------------

function bodyimageOpen(){
  document.getElementById('image_body').classList.add('img_tendencia_animate');
  document.getElementById('body').classList.add('text_tendencia_animate');
  document.getElementById('bralette').classList.add('text_tendencia_opacity');
  document.getElementById('cores').classList.add('text_tendencia_opacity');
  document.getElementById('jeans').classList.add('text_tendencia_opacity');
  document.getElementById('neon').classList.add('text_tendencia_opacity');
  document.getElementById('listras').classList.add('text_tendencia_opacity');
  document.getElementById('zindexBody').classList.add('zindex_animate');
}

function bodyimageClose(){
  document.getElementById('image_body').classList.remove('img_tendencia_animate');
  document.getElementById('body').classList.remove('text_tendencia_animate');
  document.getElementById('bralette').classList.remove('text_tendencia_opacity');
  document.getElementById('cores').classList.remove('text_tendencia_opacity');
  document.getElementById('jeans').classList.remove('text_tendencia_opacity');
  document.getElementById('neon').classList.remove('text_tendencia_opacity');
  document.getElementById('listras').classList.remove('text_tendencia_opacity');
  document.getElementById('zindexBody').classList.remove('zindex_animate');
}

// ------

function braletteimageOpen(){
  document.getElementById('image_bralette').classList.add('img_tendencia_animate');
  document.getElementById('body').classList.add('text_tendencia_opacity');
  document.getElementById('bralette').classList.add('text_tendencia_animate');
  document.getElementById('cores').classList.add('text_tendencia_opacity');
  document.getElementById('jeans').classList.add('text_tendencia_opacity');
  document.getElementById('neon').classList.add('text_tendencia_opacity');
  document.getElementById('listras').classList.add('text_tendencia_opacity');
}

function braletteimageClose(){
  document.getElementById('image_bralette').classList.remove('img_tendencia_animate');
  document.getElementById('body').classList.remove('text_tendencia_opacity');
  document.getElementById('bralette').classList.remove('text_tendencia_animate');
  document.getElementById('cores').classList.remove('text_tendencia_opacity');
  document.getElementById('jeans').classList.remove('text_tendencia_opacity');
  document.getElementById('neon').classList.remove('text_tendencia_opacity');
  document.getElementById('listras').classList.remove('text_tendencia_opacity');
}

// ------

function coresimageOpen(){
  document.getElementById('image_cores').classList.add('img_tendencia_animate');
  document.getElementById('body').classList.add('text_tendencia_opacity');
  document.getElementById('bralette').classList.add('text_tendencia_opacity');
  document.getElementById('cores').classList.add('text_tendencia_animate');
  document.getElementById('jeans').classList.add('text_tendencia_opacity');
  document.getElementById('neon').classList.add('text_tendencia_opacity');
  document.getElementById('listras').classList.add('text_tendencia_opacity');
}

function coresimageClose(){
  document.getElementById('image_cores').classList.remove('img_tendencia_animate');
  document.getElementById('body').classList.remove('text_tendencia_opacity');
  document.getElementById('bralette').classList.remove('text_tendencia_opacity');
  document.getElementById('cores').classList.remove('text_tendencia_animate');
  document.getElementById('jeans').classList.remove('text_tendencia_opacity');
  document.getElementById('neon').classList.remove('text_tendencia_opacity');
  document.getElementById('listras').classList.remove('text_tendencia_opacity');
}

// ------

function jeansimageOpen(){
  document.getElementById('image_cores').classList.add('img_tendencia_animate');
  document.getElementById('body').classList.add('text_tendencia_opacity');
  document.getElementById('bralette').classList.add('text_tendencia_opacity');
  document.getElementById('cores').classList.add('text_tendencia_opacity');
  document.getElementById('jeans').classList.add('text_tendencia_animate');
  document.getElementById('neon').classList.add('text_tendencia_opacity');
  document.getElementById('listras').classList.add('text_tendencia_opacity');
}

function jeansimageClose(){
  document.getElementById('image_cores').classList.remove('img_tendencia_animate');
  document.getElementById('body').classList.remove('text_tendencia_opacity');
  document.getElementById('bralette').classList.remove('text_tendencia_opacity');
  document.getElementById('cores').classList.remove('text_tendencia_opacity');
  document.getElementById('jeans').classList.remove('text_tendencia_animate');
  document.getElementById('neon').classList.remove('text_tendencia_opacity');
  document.getElementById('listras').classList.remove('text_tendencia_opacity');
}

// ------

function neonimageOpen(){
  document.getElementById('image_cores').classList.add('img_tendencia_animate');
  document.getElementById('body').classList.add('text_tendencia_opacity');
  document.getElementById('bralette').classList.add('text_tendencia_opacity');
  document.getElementById('cores').classList.add('text_tendencia_opacity');
  document.getElementById('jeans').classList.add('text_tendencia_opacity');
  document.getElementById('neon').classList.add('text_tendencia_animate');
  document.getElementById('listras').classList.add('text_tendencia_opacity');
}

function neonimageClose(){
  document.getElementById('image_cores').classList.remove('img_tendencia_animate');
  document.getElementById('body').classList.remove('text_tendencia_opacity');
  document.getElementById('bralette').classList.remove('text_tendencia_opacity');
  document.getElementById('cores').classList.remove('text_tendencia_opacity');
  document.getElementById('jeans').classList.remove('text_tendencia_opacity');
  document.getElementById('neon').classList.remove('text_tendencia_animate');
  document.getElementById('listras').classList.remove('text_tendencia_opacity');
}

// ------

function listrasimageOpen(){
  document.getElementById('image_cores').classList.add('img_tendencia_animate');
  document.getElementById('body').classList.add('text_tendencia_opacity');
  document.getElementById('bralette').classList.add('text_tendencia_opacity');
  document.getElementById('cores').classList.add('text_tendencia_opacity');
  document.getElementById('jeans').classList.add('text_tendencia_opacity');
  document.getElementById('neon').classList.add('text_tendencia_opacity');
  document.getElementById('listras').classList.add('text_tendencia_animate');
}

function listrasimageClose(){
  document.getElementById('image_cores').classList.remove('img_tendencia_animate');
  document.getElementById('body').classList.remove('text_tendencia_opacity');
  document.getElementById('bralette').classList.remove('text_tendencia_opacity');
  document.getElementById('cores').classList.remove('text_tendencia_opacity');
  document.getElementById('jeans').classList.remove('text_tendencia_opacity');
  document.getElementById('neon').classList.remove('text_tendencia_opacity');
  document.getElementById('listras').classList.remove('text_tendencia_animate');
}

//------------------------ANIMATION ABOUT------------------------------------

function animation_cirulo(){
  document.getElementById('circle_about').classList.add('circulo_about_animate');
}

function desanimation_circulo(){
  document.getElementById('circle_about').classList.remove('circulo_about_animate');
}
