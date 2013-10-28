CREATE TABLE Usuario (idUsuario int(10) NOT NULL AUTO_INCREMENT, idEstadoUsuario int(10) NOT NULL, nombre varchar(20), apellidos varchar(30), direccion varchar(50), dni varchar(9), email varchar(20), fechaNacimiento date, usuario varchar(20), clave varchar(20), cuentaPayPal int(30), PedidoidPedido int(10) NOT NULL, PRIMARY KEY (idUsuario));
CREATE TABLE EstadoUsuario (idEstadoUsuario int(10) NOT NULL AUTO_INCREMENT, nombre varchar(20), descripcion varchar(50), PRIMARY KEY (idEstadoUsuario));
CREATE TABLE Mensaje (idMensaje int(10) NOT NULL AUTO_INCREMENT, idEstadoMensaje int(10) NOT NULL, idUsuarioOrigen int(10) NOT NULL, idUsuarioDestino int(10) NOT NULL, textoMensaje varchar(100), asunto varchar(20), PRIMARY KEY (idMensaje));
CREATE TABLE EstadoMensaje (idEstadoMensaje int(10) NOT NULL AUTO_INCREMENT, nombre varchar(20), descripcion varchar(50), PRIMARY KEY (idEstadoMensaje));
CREATE TABLE Pedido (idPedido int(10) NOT NULL AUTO_INCREMENT, idEstadoPedido int(10) NOT NULL, idUsuarioComprador int(10) NOT NULL, idUsuarioVendedor int(10) NOT NULL, fechaEnvio date, total int(10), PRIMARY KEY (idPedido));
CREATE TABLE EstadoPedido (idEstadoPedido int(10) NOT NULL AUTO_INCREMENT, nombreEstPed varchar(20), desEstPed varchar(50), PRIMARY KEY (idEstadoPedido));
CREATE TABLE HistoricoPedido (idHistPedido int(10) NOT NULL AUTO_INCREMENT, idPedido int(10) NOT NULL, idEstadoInicial int(10) NOT NULL, idEstadoFinal int(10) NOT NULL, motivo varchar(50), PRIMARY KEY (idHistPedido));
CREATE TABLE LineaPedido (idLineaPedido int(10) NOT NULL AUTO_INCREMENT, idPedido int(10) NOT NULL, idComponente int(10) NOT NULL, precioLinea int(10), PRIMARY KEY (idLineaPedido));
CREATE TABLE Transaccion (idTran int(10) NOT NULL AUTO_INCREMENT, idPedido int(10) NOT NULL, idUsuOrigTran int(10) NOT NULL, idUsuDesTran int(10) NOT NULL, fechaTran date, concepto varchar(30), cantidad int(100), PRIMARY KEY (idTran));
CREATE TABLE Componente (idComponente int(10) NOT NULL AUTO_INCREMENT, idUsuVendedor int(10) NOT NULL, nombre varchar(20), precio int(10), PRIMARY KEY (idComponente));
CREATE TABLE Subasta (idSubasta int(10) NOT NULL AUTO_INCREMENT, idUsuCreador int(10) NOT NULL, idEstadoSub int(10) NOT NULL, fechaCierre date, fechaApertura date, precioInicial int(10), PRIMARY KEY (idSubasta));
CREATE TABLE EstadoSubasta (idEstadoSub int(10) NOT NULL AUTO_INCREMENT, nombre int(20), descripcion varchar(50), PRIMARY KEY (idEstadoSub));
CREATE TABLE HistoricoSubasta (idHistSubasta int(10) NOT NULL AUTO_INCREMENT, idEstadoIniSub int(10) NOT NULL, idEstadoFinSub int(10) NOT NULL, motivoSub varchar(50), idSubasta int(10) NOT NULL, PRIMARY KEY (idHistSubasta));
CREATE TABLE Puja (idPuja int(10) NOT NULL AUTO_INCREMENT, idSubasta int(10) NOT NULL, idUsuarioPuja int(10) NOT NULL, idEstPuja int(10) NOT NULL, cantPujada int(10), PRIMARY KEY (idPuja));
CREATE TABLE EstadoPuja (idEstPuja int(10) NOT NULL AUTO_INCREMENT, nombreEstPuja varchar(20), desEstPuja varchar(50), PRIMARY KEY (idEstPuja));
CREATE TABLE Comentario (idComentario int(11) NOT NULL AUTO_INCREMENT, idUsuarioCom int(10) NOT NULL, idPedido int(10) NOT NULL, puntuacion int(11), mensaje varchar(255), PRIMARY KEY (idComentario));
ALTER TABLE Usuario ADD INDEX FKUsuario832357 (idEstadoUsuario), ADD CONSTRAINT FKUsuario832357 FOREIGN KEY (idEstadoUsuario) REFERENCES EstadoUsuario (idEstadoUsuario);
ALTER TABLE Mensaje ADD INDEX FKMensaje190396 (idEstadoMensaje), ADD CONSTRAINT FKMensaje190396 FOREIGN KEY (idEstadoMensaje) REFERENCES EstadoMensaje (idEstadoMensaje);
ALTER TABLE Mensaje ADD INDEX FKMensaje18108 (idUsuarioOrigen), ADD CONSTRAINT FKMensaje18108 FOREIGN KEY (idUsuarioOrigen) REFERENCES Usuario (idUsuario);
ALTER TABLE Mensaje ADD INDEX FKMensaje984678 (idUsuarioDestino), ADD CONSTRAINT FKMensaje984678 FOREIGN KEY (idUsuarioDestino) REFERENCES Usuario (idUsuario);
ALTER TABLE Pedido ADD INDEX FKPedido566230 (idUsuarioComprador), ADD CONSTRAINT FKPedido566230 FOREIGN KEY (idUsuarioComprador) REFERENCES Usuario (idUsuario);
ALTER TABLE Pedido ADD INDEX FKPedido243177 (idUsuarioVendedor), ADD CONSTRAINT FKPedido243177 FOREIGN KEY (idUsuarioVendedor) REFERENCES Usuario (idUsuario);
ALTER TABLE Pedido ADD INDEX FKPedido357609 (idEstadoPedido), ADD CONSTRAINT FKPedido357609 FOREIGN KEY (idEstadoPedido) REFERENCES EstadoPedido (idEstadoPedido);
ALTER TABLE HistoricoPedido ADD INDEX FKHistoricoP550832 (idEstadoInicial), ADD CONSTRAINT FKHistoricoP550832 FOREIGN KEY (idEstadoInicial) REFERENCES EstadoPedido (idEstadoPedido);
ALTER TABLE HistoricoPedido ADD INDEX FKHistoricoP956995 (idEstadoFinal), ADD CONSTRAINT FKHistoricoP956995 FOREIGN KEY (idEstadoFinal) REFERENCES EstadoPedido (idEstadoPedido);
ALTER TABLE HistoricoPedido ADD INDEX FKHistoricoP300755 (idPedido), ADD CONSTRAINT FKHistoricoP300755 FOREIGN KEY (idPedido) REFERENCES Pedido (idPedido);
ALTER TABLE LineaPedido ADD INDEX FKLineaPedid342235 (idPedido), ADD CONSTRAINT FKLineaPedid342235 FOREIGN KEY (idPedido) REFERENCES Pedido (idPedido);
ALTER TABLE Transaccion ADD INDEX FKTransaccio806892 (idPedido), ADD CONSTRAINT FKTransaccio806892 FOREIGN KEY (idPedido) REFERENCES Pedido (idPedido);
ALTER TABLE Transaccion ADD INDEX FKTransaccio332699 (idUsuOrigTran), ADD CONSTRAINT FKTransaccio332699 FOREIGN KEY (idUsuOrigTran) REFERENCES Usuario (idUsuario);
ALTER TABLE Transaccion ADD INDEX FKTransaccio589760 (idUsuDesTran), ADD CONSTRAINT FKTransaccio589760 FOREIGN KEY (idUsuDesTran) REFERENCES Usuario (idUsuario);
ALTER TABLE LineaPedido ADD INDEX FKLineaPedid131306 (idComponente), ADD CONSTRAINT FKLineaPedid131306 FOREIGN KEY (idComponente) REFERENCES Componente (idComponente);
ALTER TABLE Componente ADD INDEX FKComponente265412 (idUsuVendedor), ADD CONSTRAINT FKComponente265412 FOREIGN KEY (idUsuVendedor) REFERENCES Usuario (idUsuario);
ALTER TABLE Subasta ADD INDEX FKSubasta542612 (idEstadoSub), ADD CONSTRAINT FKSubasta542612 FOREIGN KEY (idEstadoSub) REFERENCES EstadoSubasta (idEstadoSub);
ALTER TABLE HistoricoSubasta ADD INDEX FKHistoricoS568006 (idSubasta), ADD CONSTRAINT FKHistoricoS568006 FOREIGN KEY (idSubasta) REFERENCES Subasta (idSubasta);
ALTER TABLE HistoricoSubasta ADD INDEX FKHistoricoS758890 (idEstadoIniSub), ADD CONSTRAINT FKHistoricoS758890 FOREIGN KEY (idEstadoIniSub) REFERENCES EstadoSubasta (idEstadoSub);
ALTER TABLE HistoricoSubasta ADD INDEX FKHistoricoS402697 (idEstadoFinSub), ADD CONSTRAINT FKHistoricoS402697 FOREIGN KEY (idEstadoFinSub) REFERENCES EstadoSubasta (idEstadoSub);
ALTER TABLE Subasta ADD INDEX FKSubasta582554 (idUsuCreador), ADD CONSTRAINT FKSubasta582554 FOREIGN KEY (idUsuCreador) REFERENCES Usuario (idUsuario);
ALTER TABLE Puja ADD INDEX FKPuja958543 (idEstPuja), ADD CONSTRAINT FKPuja958543 FOREIGN KEY (idEstPuja) REFERENCES EstadoPuja (idEstPuja);
ALTER TABLE Puja ADD INDEX FKPuja691949 (idUsuarioPuja), ADD CONSTRAINT FKPuja691949 FOREIGN KEY (idUsuarioPuja) REFERENCES Usuario (idUsuario);
ALTER TABLE Puja ADD INDEX FKPuja560039 (idSubasta), ADD CONSTRAINT FKPuja560039 FOREIGN KEY (idSubasta) REFERENCES Subasta (idSubasta);
ALTER TABLE Comentario ADD INDEX FKComentario375683 (idPedido), ADD CONSTRAINT FKComentario375683 FOREIGN KEY (idPedido) REFERENCES Pedido (idPedido);
ALTER TABLE Comentario ADD INDEX FKComentario306359 (idUsuarioCom), ADD CONSTRAINT FKComentario306359 FOREIGN KEY (idUsuarioCom) REFERENCES Usuario (idUsuario);
