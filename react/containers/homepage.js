import React, { Component } from "react";
import { Box, Paper, Snackbar } from "@material-ui/core";
import Alert from "@material-ui/lab/Alert";
import InfoOutlinedIcon from "@material-ui/icons/InfoOutlined";
import HighlightOffOutlinedIcon from "@material-ui/icons/HighlightOffOutlined";
import Bash from "./bash";

import "../scss/containers/home.scss";

class Homepage extends Component {
  constructor() {
    super();
    this.state = {
      openMsg: false,
    };
  }

  handleCloseBtn() {
    this.setState({
      openMsg: true,
    });
  }

  handleCloseAlert() {
    this.setState({
      openMsg: false,
    });
  }

  render() {
    return (
      // eslint-disable-next-line react/jsx-filename-extension
      <div className="containerHome">
        <Paper className="homeWrapper" elevation={3}>
          <Box className="bashHeader">
            <InfoOutlinedIcon color="primary" className="button" />
            <HighlightOffOutlinedIcon
              color="secondary"
              className="button"
              onClick={() => this.handleCloseBtn()}
            />
          </Box>
          <Bash />
        </Paper>
        <Snackbar open={this.state.openMsg}>
          <Alert
            severity="error"
            variant="filled"
            elevation={3}
            onClose={() => {
              this.handleCloseAlert();
            }}
          >
            Why do you want to close the window? Pretty sure there are important
            information in there ;)
          </Alert>
        </Snackbar>
      </div>
    );
  }
}

export default Homepage;
