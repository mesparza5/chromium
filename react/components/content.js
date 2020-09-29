import React, { Component } from "react";
import { CircularProgress, Typography } from "@material-ui/core";

class Content extends Component {
  createMarkup() {
    return { __html: this.props.pageContent };
  }

  render() {
    return this.props.isLoading ? (
      // eslint-disable-next-line react/jsx-filename-extension
      <div className="loading">
        <CircularProgress />
      </div>
    ) : (
      <div className="page">
        <Typography variant="h2">{this.props.title}</Typography>
        <div dangerouslySetInnerHTML={this.createMarkup()} />
      </div>
    );
  }
}

export default Content;
