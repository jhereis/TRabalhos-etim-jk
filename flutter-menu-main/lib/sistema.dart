import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:fluttermenu/menu.dart';

class Sistema extends StatelessWidget {
  const Sistema({ Key? key }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("system"),
      ),
      drawer: Menuu(),
    );
  }
}