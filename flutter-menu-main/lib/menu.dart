import 'dart:ui';

import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:fluttermenu/ajuda.dart';
import 'package:fluttermenu/documentos.dart';
import 'package:fluttermenu/main.dart';
import 'package:fluttermenu/sistema.dart';

class Menuu extends StatelessWidget {
  const Menuu({ Key? key }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Container(

      child: Drawer(
        child: Material(
          color: Colors.blue,
          child: ListView(
            padding: EdgeInsets.symmetric(horizontal: 20),
            children: [
              const SizedBox(height: 16,),
              cabecalho(nome: "Igor",
              email: "igor.pereira@etec.sp.gov.br", 
              link: "https://i0.wp.com/tracklist.com.br/wp-content/uploads/2021/08/blonde-scaled-e1628810925943.jpg?fit=1201%2C675&ssl=1",
               clique: () => itemSelecao(context, 4)),
              const SizedBox(height: 16,),
              menuItem(
                texto: "sistema",
                icone: Icons.settings,
                clique:()=>itemSelecao(context, 1) ),
              const SizedBox(height: 16,),
              menuItem(
                texto: "Documentos", 
                icone: Icons.archive_sharp,
                clique:()=>itemSelecao(context, 2) ),
              const SizedBox(height: 16,),
              menuItem(
                texto: "Ajuda", 
                icone: Icons.help,
                clique:()=>itemSelecao(context, 3) ),
              const SizedBox(height: 16,),
            ],
          ),
        ),
      ),
    );
  }

  Widget menuItem({required String texto, required IconData icone, VoidCallback? clique}){
    return ListTile(
        leading: Icon(icone, color:  Colors.white,),
        title: Text(texto, style: TextStyle(color: Colors.white),),
        hoverColor: Colors.white70,
        onTap: clique,
    );
  }

  void itemSelecao(BuildContext context, int i){
    Navigator.of(context).pop();
    if(i==1){
      Navigator.of(context)
      .push(MaterialPageRoute(builder: (context)=>Sistema()));
    }else if(i==2){
      Navigator.of(context
      ).push(MaterialPageRoute(builder: (context)=>Documentos()));
    }else if(i==3){
      Navigator.of(context)
      .push(MaterialPageRoute(builder: (context)=>Ajuda()));
    }else if(i==4){
      Navigator.of(context)
      .push(MaterialPageRoute(builder: (context)=>MyApp()));
    }
  }

    cabecalho({
    required String nome,
    required String email,
    required String link,
    required VoidCallback clique,
    }) =>
    InkWell(
      onTap: clique,
      child: Row(
        children: [
          CircleAvatar(radius: 30, backgroundImage: NetworkImage(link),
          ),
          const SizedBox(width: 30),
          Column(
            children: [
              Text(nome, style: TextStyle(color: Colors.white, fontSize: 15),),
              Text(email, style: TextStyle(color: Colors.white, fontSize: 10),),
            ],
          )
        ],
      ),
    );
}