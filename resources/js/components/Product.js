import React, { Component } from 'react';

export default class Product extends Component {

    render(){

        const { opt } = this.props;

        return(
            <a href={'/men/'+ opt.slug}>
                <div className="card">
                    <img className="card-img-top" src="img/bonnet.png" alt="Card image cap"/>
                    <div className="body-card">
                        <h5 className="card-title">{opt.name}</h5>
                        <p className="card-text">{opt.price}</p>
                    </div>
                </div>
           </a>
        )
    }
}