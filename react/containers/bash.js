import React, { Component } from 'react';
import axios from 'axios';
import { Tabs, Tab, Box } from '@material-ui/core';
import '../scss/components/tabs.scss';
import Content from '../components/content';

class Bash extends Component {
  constructor() {
    super();

    this.state = {
      menu: [],
      activeTab: 0,
      pageId: 0,
      title: '',
      content: '',
      isLoading: true,
    };
  }

  componentDidMount() {
    axios.get('/api/v1/get/navigation').then((response) => {
      this.getPage(response.data[0].id);

      this.setState({
        menu: response.data,
        pageId: response.data[0].id,
        isLoading: false,
      });
    });
  }

  getPage(id) {
    axios.get(`/api/v1/get/page/${id}`).then((response) => {
      this.setState({
        title: response.data.title,
        content: response.data.content,
        isLoading: false,
      });
    });
  }

  handleClick(id) {
    this.setState({ pageId: id, isLoading: true });
    this.getPage(id);
  }

  render() {
    const handleChange = (e, value) => {
      this.setState({ activeTab: value });
    };

    return (
      // eslint-disable-next-line react/jsx-filename-extension
      <div className="me-tabs">
        <Tabs
          orientation="vertical"
          value={this.state.activeTab}
          onChange={handleChange}
        >
          {this.state.menu.map((item) => (
            <Tab
              key={item.id}
              label={item.name}
              onClick={() => this.handleClick(item.id)}
            />
          ))}
        </Tabs>
        <Box className="tab-content">
          <Content
            isLoading={this.state.isLoading}
            title={this.state.title}
            pageContent={this.state.content}
          />
        </Box>
      </div>
    );
  }
}

export default Bash;
