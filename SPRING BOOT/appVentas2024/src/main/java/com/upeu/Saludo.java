package com.upeu;

public class Saludo {
private long id;
private String mensaje;


public Saludo(long id, String mensaje) {
	super();
	this.id = id;
	this.mensaje = mensaje;
}
public long getId() {
	return id;
}
public void setId(long id) {
	this.id = id;
}
public String getMensaje() {
	return mensaje;
}
public void setMensaje(String mensaje) {
	this.mensaje = mensaje;
}

}