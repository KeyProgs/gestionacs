import React, { Component } from 'react';
import AdminLTE, { Sidebar, Content, Row, Col, Box, Button } from 'adminlte-2-react';
import HelloWorld from "./compenents/HelloWorld";
import ListClients from "./compenents/clients/ListClients";
import DetailsClient from "./compenents/clients/DetailsClient";

const { Item } = Sidebar;



class App extends Component {

  sidebar = [
    <Item key="Clients" text="Clients" to="/list-clients" />,
    <Item key="hello" text="Hello" to="/hello-world" />,
    <Item key="DetailClients" text="Detail Clients" to="/detail-client" />
  ]

  render() {
    return (
        <AdminLTE title={["Acs", "Gestion"]} titleShort={["He", "we"]} theme="blue" sidebar={this.sidebar}>
          <HelloWorld path="/hello-world" />
          <ListClients path="/list-clients" />
          <DetailsClient path="/detail-client" />
        </AdminLTE>
    );
  }
}

export default App;