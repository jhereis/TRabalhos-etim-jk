import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:fluttermenu/menu.dart';

class Documentos extends StatelessWidget {
  const Documentos({ Key? key }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
        title: Text("Docs"),
      ),
      drawer: Menuu(),
    );
  }
}