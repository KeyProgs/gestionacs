import React, { Component } from 'react';
import AdminLTE, { Sidebar, Content, Row, Col, Box, Button } from 'adminlte-2-react';
import App from "../App";

const { Item } = Sidebar;

class HelloWorld extends Component {
    state = {
        client : {
            'civilite':"civilite",
            'prenom':"Mohammed.",
            'name':"BENOMAR",
            'email':"keyprogs@gmail.com",
            'portable':"0749493779",
            'fixe':"0535605825",


            'rue':"25  ",
            'voie':"Ommer Sarrault ",
            'typevoie':"Boulvard ",
            'complementadtresse':"Sarrault ",
            'cp':"11000",
            'ville':"Sarrault ",

            'dn':"21/10/1988 ",
            'activite':"salarie",

            'matricule':"AB-274-MQ",
        }


    }

    render() {
        const NAME='BENOMAR'
        return (<Content title="Fiche Détails." subTitle="Getting started with adminlte-2-react" browserTitle="Hello World">
            <Row>
                <Col xs={6}>

                    <Box title="Détails Cients" type="primary"   footer={<Button type="danger" text="Danger Button" />}>
                        <Row>
                            <Col xs={2}>
                                <Box title="Civilite">
                                    <select className="form-control">
                                        <option>Mr</option>
                                        <option>Mme</option>

                                    </select>
                                </Box>
                            </Col>
                            <Col xs={5}>
                                <Box title="nom">
                                    <input id="name" value={this.state.client.name}  type="text" name="name" className="form-control" placeholder="Nom"/>
                                </Box>
                            </Col>
                            <Col xs={5}>
                                <Box title="Prenom">
                                    <input id="prenom"  value={this.state.client.prenom}  type="text" name="prenom" className="form-control" placeholder="Prenom"/>
                                </Box>
                            </Col>

                        </Row>
                        <Row>
                            <Col xs={6}>
                                <Box title="Email">
                                    <div className="input-group">
                                        <span className="input-group-addon"><i className="fa fa-envelope"></i></span>
                                        <input value={this.state.client.email}  id="email" type="email" className="form-control" placeholder="Email"/>
                                    </div>
                                </Box>
                            </Col>
                            <Col xs={6}>
                                <Col xs={6}>
                                    <Box title="portable">
                                        <input  value={this.state.client.portable}  id="portable" type="tel" name="portable" className="form-control" placeholder="Téléphone portable"
                                               required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" />
                                    </Box>
                                </Col>
                                <Col xs={6}>
                                    <Box title="Fixe">
                                        <input  value={this.state.client.fixe}  id="fixe" type="text" name="fixe" className="form-control" placeholder="Téléphone Fixe"/>
                                    </Box>
                                </Col>
                            </Col>
                            <Col xs={12}>
                                <Box title="Adresse">
                                    <Col xs={4}>
                                            <input  value={this.state.client.rue}  id="rue" type="text" name="rue" className="form-control" placeholder="rue"/>
                                    </Col>
                                    <Col xs={4}>
                                            <input  value={this.state.client.typevoie}  id="typevoie" type="text" name="typevoie" className="form-control" placeholder="Type voie"/>
                                    </Col>
                                    <Col xs={4}>
                                            <input id="nomvoie"  value={this.state.client.voie} type="text" name="nomvoie" className="form-control" placeholder="Nom voie"/>
                                    </Col>

                                    <Col xs={12}>
                                            <input id="complementadresse"  value={this.state.client.complementadtresse}  type="text" name="complementadresse" className="form-control" placeholder="complement adresse"/>
                                    </Col>

                                    <Col xs={6}>
                                            <input  value={this.state.client.cp}  id="cp" type="text" name="cp" className="form-control" placeholder="Code postale"/>
                                    </Col>

                                    <Col xs={6}>
                                            <input id="ville"   value={this.state.client.ville}  type="text" name="ville" className="form-control" placeholder="Ville"/>
                                    </Col>

                                </Box>
                            </Col>
                            <Col xs={6}>
                                <Box title="Date de naissance">
                                    <input  value={this.state.client.dn}  id="dn" type="text" name="dn" className="form-control" placeholder="Téléphone Fixe"/>
                                </Box>
                            </Col>
                            <Col xs={6}>
                                <Box title="Profession ou activité">
                                        <select className="form-control" id="activite">
                                            <option>Salarié non cadre</option>
                                            <option>Salarié cadre</option>
                                            <option>Etudiant</option>
                                            <option>Fonctionnaire</option>
                                            <option>Recherche d'emplois</option>
                                            <option>Retraité</option>

                                        </select>
                                </Box>
                            </Col>

                        </Row>
                    </Box>
                </Col>



                <Col xs={6}>

                    <Box title="Détails voiture" type="primary"   footer={<Button type="danger" text="Danger Button" />}>
                        <Row>
                            <Col xs={6}>
                                <Box title="Matricule">
                                    <input id="matricule" value={this.state.client.matricule} type="text" name="matricule" className="form-control" placeholder="matricule"/>
                                </Box>
                            </Col>
                            <Col xs={6}>
                                <Box title="Titulaire carte grise">
                                        <select className="form-control" id="titulairecartegrise">
                                            <option>Conducteur principale</option>
                                            <option>Conjoint ou concubin</option>
                                            <option>Conducteur proncipale ET conducteur et concubin</option>
                                            <option>Parents</option>
                                            <option>Parents du conjoint ou concubin</option>
                                            <option>Société</option>

                                        </select>
                                </Box>
                            </Col>
                            <Col xs={6}>
                                <Box title="Usage du vihicule">
                                    <select className="form-control" id="titulairecartegrise">
                                        <option>Privé et trajet travail</option>
                                        <option>Privé</option>
                                        <option>Privé et professionnel</option>
                                        <option>Tous déplacements</option>

                                    </select>
                                </Box>
                            </Col>
                            <Col xs={6}>
                                <Box title="Stationnement du vihicule">
                                    <select className="form-control" id="Stationnementvihicule">
                                        <option>Privé et trajet travail</option>
                                        <option>Privé</option>
                                        <option>Privé et professionnel</option>
                                        <option>Tous déplacements</option>

                                    </select>
                                </Box>
                            </Col>
                            <Col xs={6}>

                            </Col>
                            <Col xs={6}>
                                <Col xs={6}>


                                </Col>
                                <Col xs={6}>


                                </Col>

                            </Col>

                        </Row>
                        <Row>


                        </Row>
                    </Box>
                </Col>

            </Row>
        </Content>);
    }
}

export default HelloWorld;