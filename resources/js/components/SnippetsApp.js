import React from 'react';
import ReactDOM from 'react-dom';

function SnippetsApp() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Snippets App Component</div>

                        <div className="card-body">I'm the back end!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default SnippetsApp;

if (document.getElementById('snippets-app')) {
    ReactDOM.render(<SnippetsApp />, document.getElementById('snippets-app'));
}
