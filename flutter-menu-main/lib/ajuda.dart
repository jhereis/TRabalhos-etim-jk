import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:fluttermenu/menu.dart';

class Ajuda extends StatelessWidget {
  const Ajuda({ Key? key }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
        title: Text("Help"),
      ),
      drawer: Menuu(),
    );
  }
}